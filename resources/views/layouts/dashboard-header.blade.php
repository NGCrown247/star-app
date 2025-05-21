
<div class="my-navbar-nav rounded" x-data="userApp">

@auth
<ul class="star-ul gap-4 align-items-center w-100 justify-content-center" id="accordionFlushExample">
  <li class="star-nav-item">
    <a class="star-nav-link" href="{{ route('users.dashboard') }}">Dashboard</a>
  </li>
  <li class="star-nav-item">
    <a class="star-nav-link" href="{{ route('user.notification') }}">Notification</a>
  </li>


  <li class="star-nav-item">
    <a class="star-nav-link accordion-button collapsed"
       data-bs-toggle="collapse"
       data-bs-target="#dropdown-menu1"
       aria-expanded="false"
       aria-controls="dropdown-menu1"
       href="#">
      Tasks <i class="bi bi-chevron-down star-dropdown-toggle"></i>
    </a>
    <ul class="accordion-collapse collapse my-navdrop" id="dropdown-menu1" data-bs-parent="#accordionFlushExample">
      <li><a class="dropdown-item" href="{{ route('users.playVideo') }}">Play Videos</a></li>
      <li><a class="dropdown-item" href="{{ route('play.music') }}">Play Music</a></li>
      <li><a class="dropdown-item" href="#">CountDown Engagement</a></li>
    </ul>
  </li>


  <li class="star-nav-item">
    <a class="star-nav-link" href="{{ route('users.referral') }}">Referrals</a>
  </li>

  </ul>

@endauth


<div class="dropdown w-100 d-flex align-items-center">

  <a class="my-dash-img-link d-flex  align-items-center"
  data-bs-toggle="dropdown" aria-expanded="false" href="#">
    <div class="all-img-box">
     <img src="{{asset(Auth::user()->image)}}" alt="user">
    </div>
    <p class="m-0 ms-1 d-flex align-items-center">{{ Auth::user()->full_name }}
    </p>
    <i class='bx bx-chevron-down'></i>

  </a>


  <div class="my-dash-user-dropdown-box dropdown-menu w-100 pb-3 pt-3">

    <div class="my-dash-user-dropdown-content w-100 d-flex flex-column align-items-center">

    <div class="all-img-box">
    <img src="{{asset(Auth::user()->image)}}" alt="user">
  </div>

  <h6 class="m-0 mt-1">{{ Auth::user()->full_name }}</h6>
  <p class="" >{{ Auth::user()->email}}</p>

</div>

<li><hr class="dropdown-divider m-0 p-0"></li>
  <ul class=" my-dash-user-dropdown w-100 p-0 mb-0 mt-3">
    <li><a class="dropdown-item w-100 d-flex align-items-center rounded" href="{{ route('users.wallet') }}">
      <i class='bx bx-user-circle me-2' ></i>Wallet</a>
    </li>
    <li><a class="dropdown-item w-100 d-flex align-items-center rounded" href="{{route('users.profile')}}" @click="editUser()">
      <i class='bx bx-cog me-2'></i> Profile</a>
    </li>

    <li><a class="dropdown-item w-100 d-flex align-items-center rounded" href="#" @click="handleLogout()">
      <i class='bx bx-log-out-circle me-2'></i> Logout</a>
    </li>
  </ul>

</div>

</div>
</div>

