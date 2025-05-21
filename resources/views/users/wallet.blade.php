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

      <h5 class="wallet-head text-center w-100 p-3">Wallet</h5>

      <div class="available-balance-box w-100 d-flex flex-column align-items-center justify-content-center">
        <h6>Available Bal</h6>
        <h2>300,000</h2>

        <div class="total-cashout-since-joined d-flex gap-1 ">
          <p>Total cash out since joined</p>
          <span class="fw-semibold">10,000,000</span>

        </div>

        <div class="wallet-action-btn-box p-4 d-flex gap-4">
            <a class="wallet-btn-convert d-flex align-items-center" href="#">
              <i class='bx bxs-gift me-1' ></i>Convert to Gift</a>
            <a class="wallet-btn-cashOut d-flex align-items-center" href="{{ route('users.pointRate') }}">
              <i class='bx bx-money me-1'></i>Cash Out</a>
        </div>
      </div>





    </div>


    <div class="wallet-highlight mt-3">

      <div class="wallet-highlight-item">
        <h5>What is @include('layouts.star-point-name')</h5>
        <p>The points you receive for every task you do;
          You can either convert the points to gift or cash them out for real money.
        </p>
      </div>
      {{-- ------------------------------------ --}}

      <div class="wallet-highlight-item">
        <h5>Notes</h5>
        <p>Payment will be made 7-10 days after you initiate a cash out.
          You can cash out at most &#8358;4,000,000 each month.
        </p>

        <p>We will make the payment in collaboration with a third party platform who claims a service charge.
          For more info, go to the third party platform website to find out about their charge.</p>
      </div>
      {{-- ------------------------------------ --}}

      <div class="wallet-highlight-item">
        <h5>Contact Us</h5>
        <p>For any quetions during the cash out, please reach out to us through your profile or the blog header by clicking on the contact us menu item.
          Click here <a class="wallet-contact-link" href="#">contact us</a> if you can not access it from the above hint.
        </p>
      </div>
      {{-- ------------------------------------ --}}

    </div>

  </div>

  </div>
  </div>


</body>
</html>
