<?php

namespace App\Http\Controllers\Users;

use App\Enums\PlanType;
use App\Enums\TransactionStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Models\AccessCode;
use App\Models\EmailVerification;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\UserPlan;
use App\Notifications\SendPlanCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Email;

class PlanController extends Controller
{




  //  PAYSTACK PAYMENT
  public function pay(Request $request)
  {
    $request->validate([
      "plan_id"=> "required|integer",
    ]);
    $user = Auth::user();

    $plan = Plan::find($request->plan_id);
    if (!$plan) {
      return response()->json(["message"=> "Plan not found"],404);
    }

    $transaction=Transaction::create([
      "plan_id"=> $plan->id,
      "user_id"=> $user->id,
      "status"=> TransactionStatus::PENDING,
      "transaction_data"=> json_encode([
        "email"=> $request->email,
        "plan_id"=> $request->plan_id,
        "amount"=> $plan->plan_price *100,
        "reference"=> "txn-". generateAccessCode(30),
      ]),

    ]);


    if (!$transaction) {
      return response()->json(["message"=> "Something went wrong"],500);
    }

    $playload = [
      "email"=> $user->email,
      "amount"=> $plan->plan_price *100,
      "reference"=> $transaction->id,

    ];



    return response()->json(['payload'=>$playload]);
  }


    public function cancel(Request $request)
    {
      $request->validate([
        'transaction_id'=> 'required|string',
      ]);
      $user = Auth::user();


      $transaction=Transaction::where('id',$request->transaction_id)
                               ->where('user_id', $user->id)->first();

      if (!$transaction) {
        return response()->json(["message"=> "Transaction not found"],404);
      }

      $transaction->delete();
      return response()->json(["message"=> "Transaction cancelled successfully"],200);
    }





  public function verify(Request $request){
    $request->validate([
      'transaction_id'=> 'required|string',
      'status'=> 'required|string',
      'transaction_data'=> 'nullable|array',
    ]);
    $user = Auth::user();

    if($request->status=='success'){


      $transaction=Transaction::where('id',$request->transaction_id)
      ->where('user_id', $user->id)->first();

if (!$transaction) {
return response()->json(["message"=> "Transaction not found"],404);
}


if(!UserPlan::where('user_id', $user->id)->where('plan_id', $transaction->plan_id)->exists()){
  UserPlan::create([
    'user_id'=> $user->id,
    'plan_id'=> $transaction->plan_id,
    //'status'=> true,
  ]);
}else{
  UserPlan::where('user_id', $user->id)->update([
    'plan_id'=> $transaction->plan_id,
    // 'status'=> true,
    'user_id'=> $user->id,
  ]);
}




$transaction->status = TransactionStatus::SUCCESS;
$transaction->save();

return response()->json(["message"=> "Transaction verified successfully"],200);

    }

    return $this->cancel($request);

  }





// ---------NOT NECCESSORY--------------------
  public function callback(Request $request)
  {
    $request->validate([
      'plan_id'=>"required|integer",
      "email"=>["required","email"],
      "transaction_ref"=>["required","string"],
  ]);

  $userData = EmailVerification::where([
    ["email", $request->email],
    ["plan_id", $request->plan_id]
    ])->first();

  return view('payment.success');
  }
// ------------------------------------------

  public function sendAccessCode(Request $request){
    $request->validate([
      'plan_id'=> 'required|integer',
      'email'=> 'required|string',
    ]);

    $data =[
      'plan_id' => $request->plan_id,
      'email' => $request->email,
    ];
      $accessCode=AccessCode::where('plan_id',$request->plan_id)->where('is_used',false)->first();
      if (!empty($accessCode)) {
        $data['code'] = $accessCode->code;
        Notification::route('mail', $data['email'])->notify(new SendPlanCodeNotification($data));

         $accessCode->is_used=true;
         $accessCode->save();

         EmailVerification::where('email', $data['email'])->delete();
         return response()->json(['code'=>$data]);

      }else{

          return response()->json(['message'=>'Plan code used']);

      }

      }



//-----------------------GENERATE ACCESS CODE------------------------------

  public function generateAccessToken(Request $request){
        $request->validate([
      'code' => 'required|string',
      'plan_id' => 'required|integer',
    ]);

    $plan = Plan::find($request->plan_id);

    $data = [
      'code' => generateAccessCode(50),
      'plan_id' => $plan->plan_id
    ];
    $data['created_by'] = currentUser();

    AccessCode::create($data);
    return response()->json(['message'=> 'Access code generate success'],200);
  }






//---------------------------RETURN ALL PLANS---------------------------
    public function planList()
    {
         return view("admin.plans.list");
    }
    public function index()
    {

      $plans = Plan::where('plan_tier', '>', PlanType::TIER_ONE)->get();

      return response()->json(['plans'=>$plans],200);

    }




    //---------------------------------------------------
    public function store(PlanRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by']=currentUser();


        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('plans-images', 'public');
        }
        $plans = Plan::create($validated);

        return response()->json(['plans'=>$plans]);
    }



//-----------------------------------------------------------
     public function update(PlanRequest $request, $id)
     {

         $validatedData = $request->validated();

         $plan = Plan::findOrFail($id);
         if (!$plan) {
          return response()->json(['message'=>'Plan not found.'],404);
      }

      if($request->hasFile('image')){

        if ($plan->image) {
          Storage::disk('public')->delete($plan->image);
      }

        $validatedData['image'] = $request->file('image')->store('plans-images', 'public');
    }



        $plan->update($validatedData);
        return response()->json(['plans'=>Plan::all()],200);

     }



     //-----------------------------------------------------------
    public function destroy( $id)
    {

      $plan = Plan::findOrFail($id);

      if (!$plan) {
          return response()->json(['message' => 'Plan not found'], 404);
      }
        $plan->delete();
        return response()->json(['message'=>'Plan Deleted Successfully'],200);

    }
}
