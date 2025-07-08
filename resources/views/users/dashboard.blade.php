<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @extends('layouts.app')

</head>

<body>
    <div x-data="userApp"  class="global-container d-flex flex-column">
        {{-- DASHBOARD NAV --}}

        @include('layouts.navbar')
        @include('layouts.sidebar')
        @include('layouts.boostrap-modal')

        <div class="pages-row  p-2 rounded-2 m-auto d-flex flex-column gap-2 w-100">

            <div x-data="planApp" class="dashboard-container shadow rounded-1 d-flex flex-column w-100 p-2 align-items-center">

                <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                    {{-- @include('layout.arrow-icon') --}}
                    <h4 class="text-center w-100 mb-2">Dashboard</h4>
                </div>


                <div
                    class="my-dashboard-card-user rounded-1 shadow-lg mb-2 d-flex flex-wrap justify-content-between position-relative  w-100 p-2">

                    <div class="my-dashboard-total-withdrawal">
                        <h5 class="">Available Earning</h5>
                        <h5 class="m-0 fs-3 dash-all-withdrawal-amount">$<span>1000</span> </h5>
                        <span class="dash-all-withdrawal-accum-amount"> Cumulative Coins: 23,000,000</span>

                        <div class="dash-user-plan-box gap-2  mt-3 mb-3 d-flex align-items-center ms-auto">
                            <h5 class="m-0 rounded-1 p-2">Plan Tier:
                              <span>{{ myPlan()->plan->plan_title??'no plan' }}</span>
                            </h5>
                            <a class="dash-boost-btn rounded-1 d-flex align-items-center gap-1"
                                href="{{ route('guest.plans') }}" {{-- data-bs-target="#planModal" data-bs-toggle="modal"> --}}>
                                <i class='bx  bxs-rocket'></i> Boost</a>
                        </div>
                    </div>



                    <div class="user-dash-withdraw-btn-box flex-wrap mb-2  gap-1 d-flex mt-auto  text-end">
                        <a class=" p-1 rounded-1 dash-withdraw-history p-1 d-flex align-items-center"
                            href="{{ route('transactions') }}">Withdraw History <i class='bx  bx-chevron-right'></i>
                        </a>
                        <a class="dash-withdraw p-2 px-2 rounded-1 d-flex align-items-center gap-1"
                            href="{{ route('user.withdraw') }}">

                            <i class='bx  bx-wallet'></i> Cash Out
                        </a>
                    </div>
                </div>




                <div
                    class="my-dashboard-card-wrapper  d-flex p-0 m-0 w-100 gap-2 justify-content-center align-items-center">

                    {{-- WRAP 1 --}}
                    <div class="dashboard-card-wrap w-100 d-flex gap-2 justify-content-end ">
                        <div class="my-dashboard-card shadow-lg   w-100 p-3">
                            {{-- <i class='bx  bx-video'  ></i> --}}
                            <h5 class="w-100 dash-number-text  fs-4 ">500</h5>
                            <h5 class="w-100  ">Watched Videos</h5>
                            <p class="w-100 m-0 ">Total video watched since joined</p>
                        </div>

                        <div class="my-dashboard-card shadow-lg  w-100 p-3">
                            <h5 class="w-100 dash-number-text fs-4 ">100</h5>
                            <h5 class="w-100  ">Played Music</h5>
                            <p class="w-100 m-0 ">Total music played since joined</p>
                        </div>
                    </div>

                    {{-- WRAP 2  --}}
                    <div class="dashboard-card-wrap w-100 d-flex gap-2 w-100 ">
                        <div class="my-dashboard-card shadow-lg w-100 p-3">
                            <h5 class="w-100 dash-number-text fs-4 ">300</h5>
                            <h5 class="w-100  ">Articles</h5>
                            <p class="w-100 m-0 ">Number of claimed since joined</p>
                        </div>

                        <div class="my-dashboard-card shadow-lg w-100 p-3">
                            <h5 class="w-100 dash-number-text fs-4 ">300</h5>
                            <h5 class="w-100  ">Invites</h5>
                            <p class="w-100 m-0 ">Number of invites since joined</p>
                        </div>
                    </div>




                </div>
            </div>

            <div class="dashboard-social-box m-auto p-5">
                @include('layouts.my-socials')
            </div>
            @include('layouts.footer-copyright')


        </div>



    </div>


</body>

</html>
