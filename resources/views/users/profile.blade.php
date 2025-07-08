<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    @include('layouts.app')

</head>

<body>


    <div class="global-container d-flex flex-column w-100 align-items-center">
            @include('layouts.navbar')
            @include('layouts.sidebar')


        <div class="pages-row d-flex w-100 flex-column p-2 mt-2 mb-3 align-items-center rounded">

            <div class="user-edit-profile-wrapper shadow rounded-1 p-4  w-100">
              <h5 class="edit-profile-change-password-header w-100 text-center mb-5">Edit Profile</h5>


                <div class="user-details-wrapper d-flex flex-column align-items-center gap-3 flex-wrap w-100">
                    <div class="user-img-wrapper shadow-lg">
                        <img src="images/lady-open-mouth.jpg" alt="">
                    </div>
                    <div class="upload-image-wrapper">
                        {{-- <label for="upload-image">Change</label> --}}
                        <input type="file" class="input-field profile-input rounded-1" id="upload-image">
                    </div>

                    <div class="user-details d-flex flex-column align-items-center">
                        <h6>Frank Aluka</h6>
                        <p>frank@gmail.com</p>
                    </div>
                </div>
            </div>


            <div class="user-edit-profile-wrapper shadow w-100 mt-3 p-4 rounded-1 d-flex flex-column gap-3 py-3 align-items-center">

                <!-- Full Name -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="fullname">Full name</label>
                    <div class="position-relative w-100">
                        <input type="text" class="input-field ps-5" placeholder="Full name"
                            x-model="userForm.fullname" id="fullname">
                        <i class="fa-solid fa-user input-icon"></i>
                    </div>
                </div>

                <!-- Email -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="email">Email</label>
                    <div class="position-relative w-100">
                        <input type="text" class="input-field ps-5" placeholder="Email" x-model="userForm.email"
                            id="email">
                        <i class="fa-solid fa-envelope input-icon"></i>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="phone-number">Phone number</label>
                    <div class="position-relative w-100">
                        <input type="text" class="input-field ps-5" placeholder="Phone number"
                            x-model="userForm.phone_number" id="phone-number">
                        <i class="fa-solid fa-phone input-icon"></i>
                    </div>
                </div>
            </div>





            <div class="user-edit-profile-wrapper shadow p-4 rounded-1  mt-3 w-100 d-flex flex-column gap-3 align-items-center">

              <h5 class="edit-profile-change-password-header">Change Password</h5>

                    <!-- Password -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="pass">Password</label>
                    <div class="position-relative w-100">
                        <input type="password" class="input-field ps-5" placeholder="Password"
                            x-model="userForm.password" id="pass">
                        <i class="fa-solid fa-lock input-icon"></i>
                    </div>
                </div>

               <!-- Password -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="pass">Password</label>
                    <div class="position-relative w-100">
                        <input type="password" class="input-field ps-5" placeholder="Password"
                            x-model="userForm.password" id="pass">
                        <i class="fa-solid fa-lock input-icon"></i>
                    </div>
                </div>

                    <!--Confirm Password -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="pass">Confirm New Password</label>
                    <div class="position-relative w-100">
                        <input type="password" class="input-field ps-5" placeholder="Confirm New Password"
                            x-model="userForm.new_password" id="pass">
                        <i class="fa-solid fa-lock input-icon"></i>
                    </div>
                </div>



                <button class="button-submit mt-3 rounded-1 ms-auto border-0">Save Changes</button>
            </div>

            <div class="button-wrapper mt-5 p-4">
            <button class=" delete-btn text-light bg-danger border-0 rounded-1 p-2 px-3 me-auto">Delete Account</button>
            <p class="mt-3 text-danger">Deleting your account is permanent and cannot be undone.</p>
            </div>

        </div>



        {{-- @include('layouts.footer-copyright') --}}

    </div>


</body>

</html>
