<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    @extends('layouts.app')



    <div class="global-container d-flex flex-column" x-data="userApp">

        <div class="form-row p-2 m-auto w-100">


            <div class="form-wrapper  rounded w-100 m-auto p-3 d-flex flex-column">


                <div class="form-container rounded p-3 w-100  m-auto d-flex flex-column align-items-center ">

                    <div class="form-header-title">
                        <h5>Login</h5>
                    </div>


                    <div class="input-wrapper  d-flex flex-column position-relative mt-3 w-100">
                        <label for="email">Email</label>
                        <div class="position-relative w-100">
                            <input type="text" class="input-field ps-5 "
                            placeholder="Email"
                            x-model="userForm.email"
                                id="email">
                            <i class="fa-solid fa-envelope input-icon"></i>
                        </div>
                    </div>


                    <div class="input-wrapper d-flex flex-column mt-3 w-100">
                        <label for="pass">Password</label>

                        <div class="position-relative w-100">
                            <input type="password" class="input-field ps-5" placeholder="Password"
                                x-model="userForm.password"
                                id="pass">
                            <i class="fa-solid fa-lock input-icon"></i>
                        </div>
                    </div>


                    <div class="remember-forgot d-flex w-100 mt-3 justify-content-between align-items-center">
                        <div class="remember-me d-flex align-items-center gap-1">
                            <input type="checkbox" id="check">
                            <label class="" for="check">Remember me</label>
                        </div>
                        <div class="forgot-password">
                            <a class="forgot-password-link" href="#">Forgot Password</a>
                        </div>
                    </div>

                    <button type="button" class="button-submit btn-primary border-0 mt-4 w-100  rounded-1"
                        @click="handleLogin()">Login</button>

                    <a class="register-here-or-login ms-auto py-2" href="{{ route('register') }}">
                        Register here
                        <img src="{{ asset('icons/arrow-right.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
