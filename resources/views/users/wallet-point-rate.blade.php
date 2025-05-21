<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Top earners</title>

  @extends('layouts.app')
</head>
<body>

  <div class="my-dash-wrapper">
  @include('layouts.header')


  <div class="my-container" x-data="pagesApp">
  <div class="my-dash-row p-4">

    <div class="wallet-content w-100 border d-flex flex-column rounded align-items-center justify-content-center">

      <h5 class="wallet-head text-center w-100 p-3">Points Rate</h5>

      <div class="available-balance-box w-100 d-flex flex-column align-items-center justify-content-center">
        <h6>Available Bal</h6>
        <h2>300,000</h2>

        <div class="wallet-point-woth d-flex gap-1 ">
          <p class="d-flex align-items-center gap-1 text-success">
            <i class='bx bx-money'></i>
            <span class="text-success">&#8358;10,000</span></p>

        </div>

      </div>





    </div>


    <div class="wallet-pointRate mt-2 w-100 align-items-center">

      <div class="point-rate-head">
        <h5>Points Rate</h5>
      </div>

      <div class="wallet-pointRate-item-box mt-1 d-flex w-100">
        <h5 class="wallet-pointRate-item-worth">&#8358;<span>5000</span> </h5>
        <h5 class="wallet-pointRate-item-point"><span>17,500</span> </h5>
      </div>
      <div class="divider"></div>
      {{-- ------------------------------------ --}}

      <div class="wallet-pointRate-item-box mt-1 d-flex w-100">
        <h5 class="wallet-pointRate-item-worth">&#8358;<span>15000</span> </h5>
        <h5 class="wallet-pointRate-item-point"><span>30,000</span> </h5>
      </div>
      <div class="divider"></div>
      {{-- ------------------------------------ --}}


      <div class="wallet-pointRate-item-box mt-1 d-flex w-100">
        <h5 class="wallet-pointRate-item-worth">&#8358;<span>25000</span></h5>
        <h5 class="wallet-pointRate-item-point"><span>55,000</span></h5>
      </div>
      {{-- ------------------------------------ --}}


      <div class="pointRate-customize-cashout-a-box mt-5 w-100 align-items-center justify-content-center d-flex flex-column">
      <a href="{{ route('users.customizeCashout') }}">Customize Cash Out</a>
      <p class="mt-2">Customize cash out enables to decide whether you want to cash out everything you have in your wallet or not.</p>
    </div>

    </div>

  </div>

  </div>
  </div>


</body>
</html>
