<?php

namespace App\Http\Controllers\Auth;

use App\Enums\PlanType;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\AccessCode;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function store(RegisterRequest $request)
     {
         $validatedData = $request->validated();

          if (User::where('email', $validatedData['email'])->exists()) {
            return response()->json([
              'success' => false, 'errors' => ['email' => ['Email already exists.']]
          ], 422);

      }

         $validatedData['password'] = Hash::make($validatedData['password']);
         $validatedData['role'] = 'user';
         $validatedData['plan_tier'] = PlanType::TIER_ONE;


         $user = User::create($validatedData);

         $plan = Plan::where('plan_tier', PlanType::TIER_ONE)->first();
         if ($plan) {
          UserPlan::create([
            'user_id'=>$user->id,
            'plan_id'=> $plan->id,
          ]);

         }else {
            return response()->json([
                'success' => false,
                'errors' => ['plan' => ['Default plan not found.']]
            ], 422);
        }

         return response()->json(['message' => 'User registered successfully!', 'user' => $user], 201);
     }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
