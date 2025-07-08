<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
</head>

<body>
    @extends('layouts.app')

    <div class="global-container d-flex flex-column" x-data="userApp">

        <div class="form-row p-2 m-auto w-100">

            <div class="form-wrapper rounded w-100 m-auto p-3 d-flex flex-column">

                <div class="form-container w-100 m-auto p-3 d-flex flex-column align-items-center">

                    <div class="form-header-title">
                        <h5>Register</h5>
                    </div>

                    {{-- FORM INPUTS --}}
                    <!-- Full Name -->
                    <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                        <label for="fullname">Full name</label>
                        <div class="position-relative w-100">
                            <input type="text" class="input-field ps-5" placeholder="Full name"
                                x-model="userForm.full_name" id="fullname"
                                :class="{ 'border border-danger bg-danger bg-opacity-10 ': errors.full_name }"
                                value="{{ old('full_name') }}">

                            <i class="fa-solid fa-user input-icon"></i>
                        </div>
                        <span class="error-message text-danger ms-2 " x-text="errors.full_name"></span>
                    </div>

                    <!-- Email -->
                    <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                        <label for="email">Email</label>
                        <div class="position-relative w-100">
                            <input type="text" class="input-field ps-5"
                             placeholder="Email"
                              x-model="userForm.email"
                                id="email">
                            <i class="fa-solid fa-envelope input-icon"></i>
                        </div>
    <span class="error-message text-danger ms-2 " x-text="errors.email ? errors.email[0] : ''"></span>

                    </div>

                    <!-- Phone Number -->
                    <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                        <label for="phone-number">Phone number</label>
                        <div class="position-relative w-100">
                            <input type="text" class="input-field ps-5"
                            placeholder="Phone number"
                                x-model="userForm.phone_number"
                                id="phone-number">
                            <i class="fa-solid fa-phone input-icon"></i>
                        </div>
                        <span class="error-message text-danger ms-2 " x-text="errors.phone_number"></span>
                    </div>

                    <!-- Password -->
                    <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                        <label for="pass">Password</label>
                        <div class="position-relative w-100">
                            <input type="password" class="input-field ps-5"
                            placeholder="Password"
                                x-model="userForm.password"
                                 id="pass">
                            <i class="fa-solid fa-lock input-icon"></i>
                        </div>
                        <span class="error-message text-danger ms-2" x-text="errors.password"></span>
                    </div>

                    {{-- FORM INPUTS --}}




                    <!-- Profile Image -->
                    <div class="profile-image  w-100 mt-3">
                        <label for="profile">Profile Image</label>
                        <input type="file" class="input-field" id="profile" @change="setProfile(event)">
                    </div>
                        <span class="error-message text-danger ms-2" x-text="errors.image"></span>

                    <!-- Submit Button -->
                    <button type="button" class="button-submit btn-primary border-0 mt-5 w-100 rounded-1"
                        @click="createUser()">
                        Register
                    </button>

                    <a class="register-here-or-login ms-auto py-2" href="{{ route('login') }}">
                        Login here
                        <img src="{{ asset('icons/arrow-right.svg') }}" alt="">
                    </a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
