<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


  public function welcome(){
    return view('welcome');
  }

        // public function userList(){

        //   return  view('admin.users.list');
        // }


        // -------------------------------------------


        public function index(){

          $users = User::latest()->get();

          return response()->json(['users'=>$users]);
        }

        // --------------------------------------------


  public function editUser(){
   return ['user'=>Auth::user()];
  }


        public function dashboard(Request $request)
    {
        if (Auth::check()) {
            // Add cache-control headers to prevent caching
            return response()->view('users.dashboard')
                ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
        }

        return redirect()->route('login');
    }
        public function admin_dashboard(Request $request)
    {
        if (Auth::check()) {
            // Add cache-control headers to prevent caching
            return response()->view('content.dashboard.dashboards-analytics');
        }

        return redirect()->route('login');
    }





    public function u_profile()
    {
        return view('users.profile');
    }

    public function notification()
    {
        return view('users.notification');
    }

    public function topEarners()
    {
        return view('users.top-earners');
    }
    public function wallet()
    {
        return view('users.wallet');
    }

    public function pointRate()
    {
        return view('users.wallet-point-rate');
    }
    public function customizeCashout()
    {
        return view('users.customize-cashOut');
    }


    public function playVideo()
    {
        return view('users.play-video');
    }


    public function playMusic()
    {
        return view('users.play-music');
    }


    public function referral()
    {
        return view('users.referral');
    }
    public function planCard()
    {
        return view('layouts.plan-card');
    }


    public function unauthorized()
    {
        return view('errors.unauthorized');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');

    }


    /**
     * Show the form for creating a new resource.
     */

public function destroy(Request $request)
{
    $user = Auth::user(); // Get logged-in user

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    $user->delete(); // Delete user account
    // return response()->json(['message' => 'Account deleted successfully']);
    return redirect()->route('welcome');
}

public function delete($id)
{
    $user = User::find($id);

    if (!   $user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    $user->delete();

    return response()->json(['message' => 'Account deleted successfully']);
}



// ADMIN

public function allUser(){
  return view('admin.users.list');
}

}
