<?php

namespace App\Http\Controllers;

use App\Models\EmailVerification;
use App\Notifications\SendCodeNotification;
use App\Notifications\SendEmailNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;

class EmailVerificationController extends Controller
{


      public function sendEmailVerification(Request $request){
        $data =$request->validate([
                'email'=>'required|email',
            ]);


            $link = generateAccessCode(80);

            $data['url'] = $request->getSchemeAndHttpHost().'/users/auth/registeration?token='.$link;


           Notification::route('mail', $data['email'])->notify(new SendEmailNotification($data['url']));

              return response()->json(['message'=>"Email sent successfully"]);

    }


    public function verifyEmail(Request $request)
{
    // Retrieve the access code from the query parameter
    $token = $request->query('token');

    // Validate the code (check database, expiration, etc.)
    $isValid = $this->validateAccessCode($token);

    if (!$isValid) {
        return response()->json(['message' => 'Invalid or expired link'], 404);
    }

    return redirect()->route('users.register');
}

private function validateAccessCode($token)
{
    // Logic to validate the access code (e.g., check database or verify expiration)
    return true; // Placeholder for actual validation
}


}
