<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Referral</title>

  @extends('layouts.app')
</head>

<body>

<div class="my-dash-wrapper">

   @include('layouts.header')


  <div class="my-container" x-data="pagesApp">
  <div class="my-dash-row p-4">

    <div class="referral-content w-100 border rounded align-items-center  justify-content-center">

      <h4 class="referral-header w-100 text-center mb-3">Referral</h4>

      <div class="referral-items-box d-flex flex-column gap-3 ">
        <div class="referral-items d-flex align-items-center gap-3 rounded">
          <input type="text" class="form-control border-0 fs-6" value="https://xingtask/dtxfz?ref=crown5437" disabled>
          <a href="#" class="">Copy</a>

        </div>

        <div class="referral-actions-box mb-3 w-100 align-items-center d-flex flex-column gap-3">
          <a href="#" class="w-100 rounded text-center">Send Invite</a>
        </div>
      </div>


      {{-- referral table --}}
      <div class="referral-table mt-5 mb-3">
        <div class="referral-table-header">
          <h5 class="mb-4 w-100 rounded">Referrals</h5>
        </div>
        <div class="referral-th w-100 d-flex gap-3 mb-1 justify-content-around">
          <h6 class="w-100 text-center">Profile</h6>
          <h6 class="w-100 text-center">Names</h6>
          <h6 class="w-100 text-center">Date</h6>
          <h6 class="w-100 text-center">Time</h6>
          <h6 class="w-100 text-center">Reward</h6>
        </div>
        <div class="divider"></div>

        <div class="referral-td mt-3 w-100 d-flex gap-2  justify-content-around">
          <div class="referral-img-cover w-100 d-flex align-items-center justify-content-center">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
          </div>

          <p class="w-100 text-center d-flex align-items-center justify-content-center">John Doe</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">03/05/2025</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">3:46am</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">3,000,000</p>
        </div>
{{-- --------------------------------------------- --}}
        <div class="referral-td w-100 d-flex gap-2 mt-3  justify-content-around">
          <div class="referral-img-cover w-100 d-flex align-items-center justify-content-center">
            <div class="latest-referrals-img-box">
              <img src="{{ asset('images/lady.jpg') }}" alt="user">
            </div>
          </div>

          <p class="w-100 text-center d-flex align-items-center justify-content-center">John Doe</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">03/05/2025</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">3:46am</p>
          <p class="w-100 text-center d-flex align-items-center justify-content-center">3,000,000</p>
        </div>
{{-- --------------------------------------------- --}}

      </div>


    </div>



  </div>
  </div>
  </div>


</body>
</html>
