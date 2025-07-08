


  {{-- FORM INPUTS --}}
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

                <!-- Password -->
                <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                    <label for="pass">Password</label>
                    <div class="position-relative w-100">
                        <input type="password" class="input-field ps-5" placeholder="Password"
                            x-model="userForm.password" id="pass">
                        <i class="fa-solid fa-lock input-icon"></i>
                    </div>
                </div>

                {{-- FORM INPUTS --}}
