<nav x-data="userApp" id="navbar"
    class="my-navbar d-flex gap-3 px-4 justify-content-between  w-100 align-items-center ">

    {{-- MENU ICON --}}
    <div class="menu-icon-wrapper d-flex align-items-center">
        @include('layouts.menu-icon')
    </div>
    {{-- ----------------LOGO--------------- --}}
    @include('layouts.logo')
    {{--
              @auth
              <ul class="my-navbar-ul list-unstyled align-items-center m-0 gap-4">
                  <li><a class="" href="{{ route('dashboard') }}">Dashboard</a></li>
              </ul>

              @endauth --}}


    @guest
        <ul class="my-navbar-ul list-unstyled align-items-center ms-auto m-0 gap-4">
            <li><a class="" href="{{route('welcome')}}">Home</a></li>
            <li><a class="" href="{{route('about')}}">About</a></li>
            <li><a class="" href="#">Reviews</a></li>
            <li><a class="" href="{{route('user.contact')}}">Contact</a></li>
        </ul>

        {{-- ----ACTION BUTTON------ --}}
        <div class="my-navbar-action-button-wrapper ms-auto align-items-center gap-2">
            @include('layouts.actions-btn')
        </div>
    @endguest




    @auth



        <ul class="my-navbar-ul list-unstyled align-items-center ms-auto m-0 gap-4">
            <li><a class="" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a class="" href="{{ route('user.notification') }}">Notification</a></li>

     <div class="dropdown">

        <a class="d-flex align-items-center task-dropdown dropdown-toggle"
         aria-expanded="false"
        data-bs-toggle="dropdown"
        href="#">
            Tasks
        </a>


    <ul class="dropdown-menu">
        <li><a class="dropdown-item py-2 d-flex align-items-center gap-2" href="{{ route('video') }}">
            <i class='bx bxs-videos'></i>Watch Video</a></li>
        <li><a class="dropdown-item py-2 d-flex align-items-center gap-2" href="{{ route('music') }}">
            <i class='bx bxs-music'></i>Play Music</a></li>
        <li><a class="dropdown-item py-2 d-flex align-items-center gap-2" href="{{ route('articles') }}">
            <i class='bx bx-news'></i>Read Articles</a></li>
    </ul>
</div>



            <li><a class="" href="{{ route('user.referral') }}">Invite a friend</a></li>
        </ul>

        <div class="dropdown dashboard-user-profile gap-5 align-items-center ms-auto">

            <a class="support-icon-box p-1 rounded-5 px-2" href="{{ route('user.contact') }}">
                <i class='bx bx-support'></i>

            </a>


            <div class="dropdown">


                <a href="#" data-bs-toggle="dropdown">
                    <div class="dashboard-user-profile-img-box">
                        <img src="/../images/lady-open-mouth.jpg" alt="">
                    </div>
                </a>

                <ul class="dropdown-menu dash-user-profile-dropdown-menu shadow">


                    <div class="d-flex align-items-center gap-2 px-2 py-2">
                        <i class='bx bx-moon fs-5'></i>
                        <label for="darkModeToggle" class="flex-grow-1">Dark</label>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input" type="checkbox" id="darkModeToggle" />
                        </div>
                    </div>

                    <li class="w-100">
                        <a class="dropdown-item d-flex p-2 align-items-center gap-2 logout-item "
                        href="{{route('user.profile')}}">
                            <i class='bx bxs-user fs-5'></i>Profile
                        </a>
                    </li>

                    <li><a class="dropdown-item logout-item d-flex p-2  align-items-center gap-2"
                            href="#" @click="handleLogout()">
                            <i class='bx bx-log-out'></i>Logout</a>
                    </li>
                </ul>
            </div>

        </div>

    @endauth


</nav>



