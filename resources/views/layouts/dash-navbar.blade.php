

   <div class="my-dashboard-nav mb-4 px-3 d-flex align-items-center">

                <div class="dropdown dashboard-user-profile gap-2 d-flex align-items-center w-100">

                    <a href="#" class=" d-flex flex-column"  data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="dashboard-user-profile-img-box">
                            <img src="/../images/lady-open-mouth.jpg" alt="">
                        </div>



                            <ul class="dropdown-menu dash-user-profile-dropdown-menu">
                                {{-- <li><a class="dropdown-item profile-item" href="#">Profile</a></li> --}}
                                <li><a class="dropdown-item logout-item " href="#" @click="handleLogout()">Logout</a></li>
                            </ul>
                    </a>



                    <h6 class="dashboard-welcome-user-text m-0">Hi; <span>Frank Chibuzor Aluka</span> </h6>
                </div>



                <div class="dash-menu-icon-box" id="menu-icon-box">
                    <div class="menu-icon"></div>
                    <div class="menu-icon"></div>
                    <div class="menu-icon"></div>
                </div>


                @include('layouts.closeBtn')

            </div>
