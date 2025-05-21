

<nav x-data="userApp"  class="star-navbar w-100  align-items-center">




  <button class="star-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
    <i class='bx bx-menu-alt-left' ></i>
    </button>

@include('layouts.logo-svg')


   @guest

    <ul class="star-ul gap-4 align-items-center w-100 justify-content-center">
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">Blog</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">About</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">How it works</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">Reviews</a>
      </li>
      <li class="star-nav-item">
        <a class="star-nav-link" href="#">Contact</a>
      </li>

      </ul>


<div class="star-action-box gap-3">
  <button class="star-action-btn star-nav-regiester-btn rounded"  @click="openEmailVerifyReg()">Register</button>
  <a class="star-action-btn star-nav-login-btn rounded" href="{{ route('users.login-form') }}"  >Login</a>
  </div>

  @endguest


@auth

<div class="w-100">
@include('layouts.dashboard-header')
</div>

@endauth

</nav>

@include('layouts.sidebar')





