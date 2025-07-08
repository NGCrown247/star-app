<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return $users = User::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }
    public function show_login()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
           $data['image'] = $request->file('image')->store('profile-image','public');
        }

        User::create($data);

        return response()->json(['message'=>'Registration Successfull!']);

    }

    /**
     * Display the specified resource.
     */
public function login(LoginRequest $request)
{
    $credentials = $request->validated();

    if (Auth::attempt($credentials)) {
        return response()->json(['message'=> 'Login success'],200);
    }
        return response()->json(['message'=> 'Login Not Successfull'],401);
}


    public function logout(){
      Auth::logout();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function dashboard(){
        if(Auth::user()-> role === 'user'){
        return view('users.dashboard');

        }else {
        return view('admin.dashboard');

        }
    }


    public function welcome(){
        return view('welcome');
    }
    public function notification(){
        return view('users.notification');
    }

    public function referral(){
        return view('users.referral');
    }
    public function contact(){
        return view('users.contact-us');
    }


        public function profile(){
        return view('users.profile');
    }


        public function videos(){
        return view('users.videos');
    }


        public function music(){
        return view('users.music');
    }
        public function add_bank(){
        return view('users.bank');
    }
        public function withdraw(){
        return view('users.withdrawal');
    }

        public function transactions(){
        return view('users.transactions');
    }
        public function rate(){
        return view('users.rate');
    }

        public function articles(){
        return view('users.articles');
    }

        public function plans(){
        return view('users.plans');
    }

        public function about(){
        return view('users.about');
    }


}
