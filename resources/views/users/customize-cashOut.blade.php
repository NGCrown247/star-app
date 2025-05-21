<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customize cashout</title>

  @extends('layouts.app')
</head>
<body>

  <div class="my-dash-wrapper">
  @include('layouts.header')

  <div class="my-container" x-data="pagesApp">
  <div class="my-dash-row p-4">

    <div class="wallet-content w-100 border d-flex flex-column rounded align-items-center justify-content-center">

      <h5 class="wallet-head text-center w-100 p-3">Customize Cash Out</h5>

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

    <div class="form-group mt-3 mb-2">
      <input type="email"
      class="form-control  p-2"
      :class="{'border border-danger bg-danger bg-opacity-10 ': errors.email}"
      value="{{ old('email') }}"
      placeholder="Enter the number of points"
      x-model="userForm.email"
      autocomplete="email">
    </div>
      <a class="" href="#">Cash out all</a>
    <p class="cashOut-amount mt-3">Amount to Cash Out: <span class="fw-bold text-success"> &#8358;10,000</span> </p>

      <div class="pointRate-customize-cashout-a-box mt-5 w-100 align-items-center justify-content-center d-flex flex-column">
      <a href="#" @click="openCashOutModal()" >Cash Out</a>
    </div>

    </div>

  </div>








  <div class="modal fade" id="cashOutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-5">

          <h5 class="w100 text-center m">Enter Account Details</h5>


          <div class="form-group mt-3">
            <input type="email"
            class="form-control text-muted"
            :class="{'border border-danger bg-danger bg-opacity-10 '}"
            value="300,000"
            placeholder="Amount to cash out"
            disabled>
          </div>

          <select class="form-select form-select-md mb-3 mt-4" aria-label="Large select example">
            <option selected>Select Bank</option>
            <option value="1">Access Bank</option>
            <option value="2">United Bank For Africa</option>
            <option value="3">Opay</option>
            <option value="3">PalmPay</option>
            <option value="3">Moniepoint</option>
          </select>


          <div class="form-group mt-3">
            <input type="email"
            class="form-control"
            :class="{'border border-danger bg-danger bg-opacity-10 '}"
            value="{{ old('email') }}"
            placeholder="Account Hoder's Name"
            x-model="userForm.email"
            autocomplete="email">
          </div>

          <div class="form-group mt-3">
            <input type="email"
            class="form-control"
            :class="{'border border-danger bg-danger bg-opacity-10 '}"
            value="{{ old('email') }}"
            placeholder="Account Number"
            x-model="userForm.email"
            autocomplete="email">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn  btn-proceed" @click="openConfirmCashOut()">Proceed</button>
          {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
        </div>
      </div>
    </div>
  </div>




  {{-- CASH OUT CONFIRMATION --}}

  <div class="modal fade" id="confirmCashOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-body p-5">

          <h5 class="modal-head-text mb-4 text-center">Confirm Cash Out</h5>
          <div class="star-cashOut-warning ">
            <p class="text-warning">Your are about to cash out 300,0000 worth  <span>&#8358;10,000</span> </p>
            <p class="text-warning">Before cashing out, make sure your payout details are updated and correct.
              We cannot modify or recall a transaction once it has been submitted.</p>
          </div>


            <div class="star-wallet-accountDetails mt-3">
              <h6 class="w-100">Amount to Cash Out:</h6>
              <h6 class="w-100">300,000</h6>
            </div>
            {{-- -------------------------------- --}}

            <div class="star-wallet-accountDetails mt-3">
              <h6 class="w-100">Bank Name:</h6>
              <h6 class="w-100">Access Bank</h6>
            </div>
            {{-- -------------------------------- --}}

            <div class="star-wallet-accountDetails mt-3">
              <h6 class="w-100">Beneficiary Name:</h6>
              <h6 class="w-100">John Doe</h6>
            </div>
            {{-- -------------------------------- --}}

            <div class="star-wallet-accountDetails mt-3">
              <h6 class="w-100">Beneficiary Account:</h6>
              <h6 class="w-100">1234567890</h6>
            </div>
            {{-- -------------------------------- --}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn  btn-proceed" @click="openCashOut()">Cash Out</button>

        </div>
      </div>
    </div>
  </div>


  </div>
  </div>


</body>
</html>
