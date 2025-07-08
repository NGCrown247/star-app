<nav id="dash-sidebar" class="dash-sidebar  d-flex flex-column w-100 align-items-center">


    <div class="dashboard-logo-wrapper p-3 me-auto w-100 ">
        @include('layouts.logo')
    </div>



    <ul class="dash-sidebar-ul px-1 pb-4 list-unstyled w-100 mt-4 m-0 d-flex flex-column" id="sidebarAccordion">

        <li>
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="{{ route('user.dashboard') }}">
                <i class='bx bxs-dashboard fs-5'></i> Dashboard
            </a>
        </li>

        <li>
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="{{ route('user.notification') }}">
                <i class='bx bxs-bell fs-5'></i> Notifications
            </a>
        </li>

        <!-- Tasks Dropdown -->
        <li class="accordion-item">
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="#collapseTasks" data-bs-toggle="collapse"
                role="button" aria-expanded="false" aria-controls="collapseTasks">
                <i class='bx bxs-checkbox-checked fs-5'></i> Tasks
                <i class='bx bx-chevron-down ms-auto'></i>
            </a>
            <ul id="collapseTasks" class="collapse list-unstyled ms-4" data-bs-parent="#sidebarAccordion">
                <li><a href="{{ route('video') }}" class="nav-link d-flex align-items-center gap-2 p-3"><i
                            class='bx bxs-videos fs-5'></i> Video Tasks</a></li>
                <li><a href="{{ route('music') }}" class="nav-link d-flex align-items-center gap-2 p-3"><i
                            class='bx bxs-music fs-5'></i> Music Tasks</a></li>
                <li><a href="{{route('articles')}}" class="nav-link d-flex align-items-center gap-2 p-3">
                        <i class='bx bx-news  fs-5'></i>
                        Articles</a></li>
            </ul>
        </li>

        <li>
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="{{ route('user.referral') }}">
                <i class='bx bxs-group fs-5'></i> Invite a friend
            </a>
        </li>

        <li>
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="{{ route('rate') }}">
                <i class='bx bx-transfer-alt'></i>
                Xingcoin rate
            </a>
        </li>

        <!-- Account Settings Dropdown -->
        <li class="accordion-item">
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="#collapseAccount" data-bs-toggle="collapse"
                role="button" aria-expanded="false" aria-controls="collapseAccount">
                <i class='bx bxs-brightness fs-5'></i> Account Settings
                <i class='bx bx-chevron-down ms-auto'></i>
            </a>

            <ul id="collapseAccount" class="collapse list-unstyled ms-4" data-bs-parent="#sidebarAccordion">
                <li>
                    <a href="{{ route('user.profile') }}" class="nav-link d-flex align-items-center gap-2 p-3">
                        <i class='bx bxs-user fs-5'></i> Profile
                    </a>
                    {{-- <a href="{{ route('add-bank') }}" class="nav-link d-flex align-items-center gap-2 p-3">
                        <i class='bx bxs-bank fs-5'></i> Add Bank
                    </a> --}}
                </li>

                <li class="d-flex align-items-center gap-2 px-2 py-2">
                    <i class='bx bx-moon fs-5'></i>
                    <span class="flex-grow-1">Dark Mode</span>
                    <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="darkModeToggle" />
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <a class="nav-link p-3 d-flex align-items-center gap-2" href="{{ route('user.contact') }}">
                <i class='bx bx-headphone bx-flip-horizontal'></i> Chat With Us
            </a>
        </li>

    </ul>
</nav>

<!-- Optional Backdrop -->
<div class="dash-back-drop" id="back-drop"></div>
