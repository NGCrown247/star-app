
@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = $navbarDetached ?? '';

@endphp

<div  class="w-100">
    <!-- Navbar -->
    <nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{ isset($navbarDetached) ? $navbarDetached : '' }} align-items-center bg-navbar-theme" id="layout-navbar">
        @if(!isset($navbarDetached))
            <div class="{{$containerNav}}">
        @endif

        <!-- Brand -->
        @if(isset($navbarFull))
        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">@include('_partials.macros', ["width" => 25, "withbg" => 'var(--bs-primary)'])</span>
                <span class="app-brand-text demo menu-text fw-bold text-heading">{{ config('variables.templateName') }}</span>
            </a>
        </div>
        @endif

        <!-- Toggle Button -->
        @if(!isset($navbarHideToggle))
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ? ' d-xl-none ' : '' }}">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0);">
                <i class="bx bx-menu bx-md"></i>
            </a>
        </div>
        @endif

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search bx-md"></i>
                    <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
                </div>
            </div>

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- GitHub Star Button -->
                <li class="nav-item lh-1 me-4">
                    <a class="github-button" href="{{ config('variables.repository') }}" data-icon="octicon-star" data-size="large" data-show-count="true">
                        Star
                    </a>
                </li>

                <!-- User Dropdown -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">John Doe</h6>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><div class="dropdown-divider my-1"></div></li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class="bx bx-cog bx-md me-3"></i><span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i>
                                    <span class="flex-grow-1 align-middle">Billing Plan</span>
                                    <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                                </span>
                            </a>
                        </li>
                        <li><div class="dropdown-divider my-1"></div></li>
                        <li>

                          <form action="{{ route('users.logout') }}" method="POST" id="logout-form">
                            @csrf
                            <button type="submit" class="admin-logout-btn d-flex dropdown-item">
                                <i class="bx bx-power-off bx-md me-3"></i>Logout
                            </button>
                          </form>



                        {{-- <li x-data="userApp">
                            <button type="submit" class="admin-logout-btn d-flex dropdown-item" @click="handleLogout()">
                                <i class="bx bx-power-off bx-md me-3"></i>Logout
                            </button>
                        </li> --}}



                        </li>
                    </ul>
                </li>
                <!-- End User Dropdown -->
            </ul>
        </div>

        @if(!isset($navbarDetached))
            </div>
        @endif
    </nav>
    <!-- End Navbar -->
</div>

<!-- Custom Styles -->
<style>
    .admin-logout-btn {
        background: none;
        color: #384551;
        justify-content: start;
        align-items: center;
    }
    .admin-logout-btn:hover {
        background: #f8f9fa;
    }
</style>
