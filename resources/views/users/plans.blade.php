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


        <div class="pages-row d-flex w-100 flex-column  p-2 mb-3 align-items-center rounded">

            <div x-data="planApp" x-show="plans.length>0"
                class="plan-wrapper shadow rounded-1 d-flex flex-wrap w-100 p-4  align-items-center justify-content-center gap-3">


                    <div class="plan-header-text-wrapper m-auto text-center w-100">
                        <h4 class="mb-0" id="planModalLabel">Choose your plan</h4>
                        <p>Unlock endless possibilities</p>
                    </div>


                    <!-- Plan Card 1 -->
                    <template x-for="plan in plans" :key="plan.id">
                    <div class="plan-card w-100 shadow-lg p-3 rounded-2">
                        <div class="plan-card-header">
                            <h5 class="plan-text mb-0 d-flex align-items-center p-1 rounded-5" x-text="plan.plan_title">

                            </h5>
                        </div>
                        <p>For average earning</p>
                        <div class="plan-card-amount">
                            <h3>$<span x-text="plan.plan_price"></span></h3>
                            <p class="m-0">One time payment</p>
                        </div>
                        <div class="daily-earning-wrapper d-flex">
                            <p>Daily earning $</p>
                            <span x-text="plan.plan_earn_daily">0.10</span>
                        </div>

                        <button id="sub" class="mb-3 border w-100 rounded-1 p-2"
                            data-bs-target="#paymentMethodModal" data-bs-toggle="modal">

                            <i class='bx bxs-rocket'></i>
                            Boost Now
                        </button>

                        <div class="advantages-wrapper">
                            <p class="mb-2" x-text="plan.Benefit_header">Advantages</p>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0" x-text="plan.watch_video ">Watch videos</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0" x-text="plan.play_music ">Play music</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Read Articles</p>
                            </div>
                        </div>
                    </div>
                </template>

            </div>


        </div>


        @include('layouts.plan-modal')
        {{-- @include('layouts.footer-copyright') --}}

    </div>


</body>

</html>
