
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  @extends('layouts.app')
</head>
<body>

<!-- @if(!Auth::check() || (Auth::user()->role !== 'user' && Auth::user()->role !== 'admin'))
    @php
        header("Location: " . route('welcome')); // Replace 'home' with the correct route
        exit();
    @endphp
@endif -->



<div class="my-dash-wrapper">

{{-- -------------Header Starts-------------------------- --}}

@include('layouts.header')
{{-- -------------Header end----------------------- --}}


<div class="my-container">
  <div class=" my-dash-row" x-data="planApp">

    <div class="my-dash-conent  rounded d-flex gap-3">

      <div class="my-dash-user-details w-100 rounded border">

        <div class="my-current-plan-box">
        <div class="my-current-plan-items d-flex gap-2 flex-column align-items-center">

          <h6 class="your-power-plan-text border me-3 ms-2">
            Plan: Tier <span>{{ myPlan()->plan->plan_tier ?? 'No plan'}}</span>
        </h6>

          <a class="current-plan-boost-link d-flex align-items-center gap-1
           collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#dropdown-menu4"
            aria-expanded="false"
            aria-controls="dropdown-menu4" href="#">
            <i class='bx bxs-rocket'></i>Boost
            <i class='bx bxs-chevron-right'></i>
          </a>


        </div>

        <ul class="accordion-collapse collapse my-navdrop" id="dropdown-menu4" data-bs-parent="#accordionFlushExample">

          @foreach (allPlans() as $plan)
          <li><a class="dropdown-item" href="#" @click="handlePlanClick({{ $plan}})"> {{ $plan->plan_title }}</a></li>

          @endforeach


        </ul>

        </div>



        <div class="current-balance-box d-flex gap-2 ms-auto align-items-center">
          <h6 class="current-balance-text m-0">Wallet:</h6>
          <h6 class="current-balance m-0">4000</h6>
        </div>

      </div>


      {{-- --------------------------------- --}}


      <div class="my-dash-card d-flex w-100 shadow rounded">
        <div class="my-dash-card-items">
        <h5 class="card-header w-100">Videos</h5>
        <h4>500</h4>

      <p>Total played videos</p>

      </div>

      <div class="my-dash-card-icon-box">
        <i class='bx bx-camera-movie'></i>
      </div>
      </div>
      {{-- --------------------------------- --}}


      <div class="my-dash-card d-flex w-100 shadow rounded">
        <div class="my-dash-card-items">
        <h5 class="card-header w-100">Music</h5>
        <h4>300</h4>

      <p>Total played music</p>

      </div>

      <div class="my-dash-card-icon-box">
        <i class='bx bx-music' ></i>
      </div>
      </div>


      {{-- --------------------------------- --}}

      <div class="my-dash-card d-flex w-100 shadow rounded">
        <div class="my-dash-card-items">
        <h5 class="card-header w-100">Active screen</h5>
        <h4>1000</h4>

      <p>Number of times claimed</p>

      </div>

      <div class="my-dash-card-icon-box">
        <i class='bx bx-devices' ></i>
      </div>
      </div>


    </div>





    <div class="my-dash-sub-row rounded">

{{-- TRANSACTION HISTORY --}}
    <div class="my-dash-transaction-history  rounded border">

      <div class="transaction-history-header rounded">
        <h5>Transaction History</h5>
      </div>


      <div class="transaction-history-t-head gap-4 align-items-center rounded d-flex justify-content-between">
        <h6>Reference</h6>
        <h6>Type</h6>
        <h6>Date</h6>
        <h6>Time</h6>
        <h6>Status</h6>
      </div>
      {{-- list --}}
      <div class="transaction-history-td gap-4 p-3 d-flex">
        <small>648rgfh7467</small>
        <small>Withdrawal</small>
        <small>03/05/2025</small>
        <small>3:48pm</small>
        <small><p class="transaction-status text-success bg-success bg-opacity-10">Success</p></small>
      </div>



      <div class="transaction-history-td align-items-center gap-4 p-3 d-flex">
        <small>648rgfh7467</small>
        <small>Withdrawal</small>
        <small>03/05/2025</small>
        <small>3:48pm</small>
        <small><p class="transaction-status text-danger bg-danger bg-opacity-10">Rejected</p></small>
      </div>


      <div class="transaction-history-td align-items-center gap-4 p-3 d-flex">
        <small>648rgfh7467</small>
        <small>Withdrawal</small>
        <small>03/05/2025</small>
        <small>3:48pm</small>
        <small><p class="transaction-status text-warning bg-warning bg-opacity-10">Pending</p></small>
      </div>

      <div class="transaction-history-td align-items-center gap-4 p-3 d-flex">
        <small>648rgfh7467</small>
        <small>Withdrawal</small>
        <small>03/05/2025</small>
        <small>3:48pm</small>
        <small><p class="transaction-status text-warning bg-warning bg-opacity-10">Pending</p></small>
      </div>



  </div>

{{-- -------------LATEST REFERRALS --}}

      <div class="my-dash-latest-referral rounded border">
        <div class="my-dash-latest-eferral-header">
          <h5 >Latest Referrals</h5>
          <div class="divider mt-2"></div>
        </div>

          {{-- <p class="p-4 text-muted p-placeholder" aria-label="No new referrals"></p> --}}

          <div class="latest-referrals-notice d-flex align-items-center">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
            <div class="latest-referrals-details">
              <h6>John Doe</h6>
              <li class="w-100 text-muted">xxxxdoe@gmail.com
              <span class="bg-success bg-opacity-10 rounded-5 p-2 text-muted ms-4">Gold</span></li>
            </div>
          </div>
          {{-- ------------------------- --}}
          <div class="latest-referrals-notice d-flex align-items-center">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
            <div class="latest-referrals-details">
              <h6>John Doe</h6>
              <li class="w-100 text-muted">xxxxdoe@gmail.com
                 <span class="bg-success bg-opacity-10 rounded-5 p-2 text-muted ms-4">Wood</span></li>
            </div>
          </div>
          {{-- ------------------------- --}}
          <div class="latest-referrals-notice d-flex align-items-center ">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
            <div class="latest-referrals-details">
              <h6>John Doe</h6>
              <li class="w-100 text-muted">xxxxdoe@gmail.com
                <span class="bg-success bg-opacity-10 rounded-5 p-2 text-muted ms-4">Wood</span></li>
            </div>
          </div>

          {{-- ------------------------- --}}
          <div class="latest-referrals-notice d-flex align-items-center ">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
            <div class="latest-referrals-details">
              <h6>John Doe</h6>
              <li class="w-100 text-muted">xxxxdoe@gmail.com
                 <span class="bg-success bg-opacity-10 rounded-5 p-2 text-muted ms-4">Bronze</span></li>
            </div>
          </div>

          {{-- ------------------------- --}}
          <div class="latest-referrals-notice d-flex align-items-center">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
            <div class="latest-referrals-details">
              <h6>John Doe</h6>
              <li class="w-100 text-muted">xxxxdoe@gmail.com
                <span class="bg-success bg-opacity-10 rounded-5 p-2 text-muted ms-4">Wood </span></li>
            </div>
          </div>

      </div>
    </div>



    <div class="modal fade" id="plan-payment-comfirmation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header boost-confirmation-header px-4 pb-0">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Boost Confirmation</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="cancelPlanPayment()"></button>
          </div>


          <div class="modal-body boost-confirmation-body">

            <p>Are you sure you want to select this plan? You will be charged &#8358;<span class="fw-bold" x-text="selectedPlan.plan_price"></span> for this plan.</p>
            <div class="d-flex gap-1">
              <h6 class="fs-6">Plan:</h6>
              <h6 class="plan-title fs-6" x-text="selectedPlan.plan_title"> </h6>
            </div>

            <div class="d-flex">
              <h6 class="fs-5">&#8358;</h6>
              <h6 class="plan-price fs-5" x-text="selectedPlan.plan_price"> </h6>
            </div>
            {{-- ----------------------- --}}
            <div class="d-flex">
              <p>Daily earning &#8358;</p>
              <p class="plan-daily-earning" x-text="selectedPlan.plan_earn_daily"> </p>
            </div>
            {{-- ----------------------- --}}



            <button :disabled="btnDisabled"
            type="button" class="btn btn-primary boost_confirmation-body-btn border-0 w-100 mb-3"
            @click="handleboostPlanPay()">
      <span x-show="isLoading" class="spinner-border spinner-border-sm ms-3" aria-hidden="true"></span>
              Boost for &#8358;<span class=""x-text="selectedPlan.plan_price"></span>
            </button>


            <div class="boost_confirmation-benefit-items d-flex flex-column gap-3">

            <div class="d-flex">
              <h5 class="border-bottom m-0" x-text="selectedPlan.Benefit_header"></h5>
            </div>
            {{-- ----------------------- --}}

            <div class="d-flex align-items-center">
              <i class='bx bx-radio-circle-marked'></i>
              <h6 class="m-0" x-text="selectedPlan.watch_video"></h6>
            </div>
            {{-- ----------------------- --}}

            <div class="d-flex align-items-center">
              <i class='bx bx-radio-circle-marked'></i>
              <h6 class="m-0" x-text="selectedPlan.play_music"></h6>
            </div>
            {{-- ----------------------- --}}

            <div class="d-flex align-items-center">
              <i class='bx bx-radio-circle-marked'></i>
              <h6 class="m-0" x-text="selectedPlan.countDown_engagement"></h6>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

</div>

</div>
</div>



</body>
</html>

