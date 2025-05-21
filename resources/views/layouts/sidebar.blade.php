<div class="offcanvas offcanvas-start star-sidebar" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header star-sidebar-header d-flex align-items-center">
    @include('layouts.logo-svg')
    @include('component.close-sidebar-btn')
  </div>

  <div class="offcanvas-body">

    @guest

    <ul class="navbar-nav star-sidebar-ul" id="accordionFlushExample">
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">
          <i class='bx bx-home-heart' ></i>Blog</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">
          <i class='bx bx-info-square'></i>About</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">
          <i class='bx bx-book-reader'></i>How it works</a>
      </li>

      <li class="star-nav-item">
        <a class="star-nav-link" href="#">
          <i class='bx bx-comment-check'></i>Reviews</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">
          <i class='bx bx-support'></i>Contact</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#" @click="openEmailVerifyReg()">
          <i class='bx bxs-user-plus'></i>Register</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="{{ route('users.login-form') }}">
          <i class='bx bx-log-in-circle' ></i>
          Login</a>
      </li>

      </ul>
      @endguest





@auth
    <!-- AUTHENTICATED -->
    <ul class="navbar-nav star-sidebar-ul accordion accordion-flush" id="accordionFlushExample">

      <li class="nav-item star-nav-item">
        <a class="nav-link star-nav-link" href="{{ route('users.dashboard') }}">
          <i class='bx bxl-windows'></i>Dashboard
        </a>
      </li>

      <li class="nav-item star-nav-item">
        <a class="nav-link star-nav-link" href="{{ route('user.notification') }}">
          <i class='bx bxs-bell'></i>Notifications
        </a>
      </li>

  <!-- Activities Dropdown -->
<li class="nav-item star-nav-item">
  <a class="nav-link star-nav-link d-flex justify-content-between align-items-center collapsed"
     data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
    <i class='bx bxs-bookmark-alt-minus'></i> Tasks
    <i class="bi bi-chevron-down toggle-icon"></i>
  </a>
  <div id="flush-collapseOne" class="accordion-collapse collapse p-0 mt-2 star-sidebar-dropdown" data-bs-parent="#accordionFlushExample">
    <ul class="nav flex-column">
      <li class="nav-item"><a href="{{ route('users.playVideo') }}" class="nav-link star-nav-dropdown-link">Play Video</a></li>
      <li class="nav-item"><a href="{{ route('play.music') }}" class="nav-link star-nav-dropdown-link">Play Music</a></li>
      <li class="nav-item"><a href="#" class="nav-link star-nav-dropdown-link">Countdown Engagement</a></li>
    </ul>
  </div>
</li>

      <!-- Recruits -->
      <li class="nav-item star-nav-item">
        <a class="nav-link star-nav-link" href="{{ route('users.referral') }}">
          <i class='bx bxs-group'></i> Referrals
        </a>
      </li>


       <!-- Withdrawal Dropdown -->
       <li class="nav-item star-nav-item">
        <a class="nav-link star-nav-link" href="{{ route('users.wallet') }}">
          <i class='bx bxs-group'></i> Wallet
        </a>
      </li>


       <!-- Settings Dropdown -->
       <li class="nav-item star-nav-item">
        <a class="nav-link star-nav-link d-flex justify-content-between align-items-center collapsed"
           data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapsetwo">
          <i class='bx bxs-bookmark-alt-minus'></i> Settings
          <i class="bi bi-chevron-down toggle-icon"></i>
        </a>
        <div id="flush-collapse3" class="accordion-collapse collapse p-0 mt-2 star-sidebar-dropdown" data-bs-parent="#accordionFlushExample">
          <ul class="nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link star-nav-dropdown-link">Profile</a></li>
            <li class="nav-item"><a href="#" class="nav-link star-nav-dropdown-link" @click="handleLogout()">Logout</a></li>
          </ul>
        </div>
      </li>

@endauth


    @include('layouts.social-icons')
  </div>
</div>

