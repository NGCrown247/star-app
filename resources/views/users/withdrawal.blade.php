<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Withdrawal</title>

    @include('layouts.app')

</head>

<body>


    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')

        <div class="pages-row d-flex w-100 flex-wrap p-2 mb-3 align-items-center rounded">

            {{-- CONTENT START HERE --}}

            <div class="withdrawal-container shadow p-2 rounded-2 m-auto d-flex flex-column gap-2 w-100">

                <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                    {{-- @include('layout.arrow-icon') --}}
                    <h4 class="text-center w-100 mb-2">Withdrawal</h4>
                </div>


                {{-- ------------------------------------------------------------ --}}

                <div class="withdrawal-method-items-wrapper mb-3 m-auto d-flex flex-wrap gap-2 w-100">

                    <div class="withdrawal-method-wrapper rounded-1 gap-2 w-100 d-flex">
                        {{-- METHOD 1 --}}

                        <div
                            class="withdrawal-method-card mt-2 d-flex w-100 shadow-sm rounded position-relative align-items-center ">
                            <label for="payment-1" id="payment-method-1"
                                class="p-3 align-items-center rounded gap-3 d-flex w-100 position-relative">
                                <img src="{{ asset('cards/geegpay.svg') }}" alt="">
                                Geegpay, Wise, (USD)</label>
                            <input type="radio" id="payment-1" checked name="withdraw_method"
                                class=" end-0 position-absolute me-2">
                        </div>
                        {{-- METHOD 2 --}}
                        <div
                            class="withdrawal-method-card mt-2 d-flex w-100 shadow-sm rounded position-relative align-items-center ">
                            <label for="payment-2" id="payment-method-2"
                                class="p-3 align-items-center rounded gap-3 d-flex w-100 position-relative">
                                <img src="{{ asset('cards/wema-bank.svg') }}" alt="">
                                Wema, Palmpay, Opay (&#8358;)</label>
                            <input type="radio" id="payment-2" name="withdraw_method"
                                class=" end-0 position-absolute me-2">
                        </div>

                    </div>




                    {{-- ------------------------------WITHDRAWAL FORM 1  GEEGPAY----------------------------------------------------- --}}

                    <div class="withdrawal-method-form-wrapper-1 p-wrap rounded-1 w-100 ">


                        <!-- Account Holder -->
                        <div class="withdrawal-twin-input w-100 d-flex align-items-center gap-2">

                            <div class="input-wrapper d-flex flex-column position-relative w-100">
                                <label for="account_older" class="ps-2">Account holder</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2" placeholder="Account holder"
                                        id="account_older">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>



                            <!-- Bank name -->
                            <div class="input-wrapper d-flex flex-column position-relative w-100">
                                <label for="bank-name" class="ps-2">Bank name</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2" placeholder="Bank name"
                                        id="bank-name">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>

                        </div>


                        <!-- Account number -->
                        <div class="withdrawal-twin-input w-100 d-flex align-items-center gap-2">
                            <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                                <label for="account-number" class="ps-2">Account number</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2" placeholder="Account number"
                                        id="account-number">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>



                            <!-- Checking -->
                            <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                                <label for="Checking" class="ps-2">Checking</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2" placeholder="Account type"
                                        id="Checking">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>
                        </div>


                        <!-- ZIP code -->
                        <div class="withdrawal-twin-input w-100 d-flex align-items-center gap-2">
                            <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                                <label for="routing_number" class="ps-2">Routing number</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2"
                                        placeholder="123456789 (for wire & ACH)" id="routing_number">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>

                            <!-- Routing number -->
                            <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                                <label for="routing_number" class="ps-2">Routing number</label>
                                <div class="position-relative w-100">
                                    <input type="text" class="input-field ps-2"
                                        placeholder="123456789 (for wire & ACH)" id="routing_number">
                                    {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                                </div>
                            </div>

                        </div>

                        <!-- Bank name and address -->
                        <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                            <label for="bank-name-and-address" class="ps-2">Bank name and address</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2" placeholder="Bank name and address"
                                    id="bank-name-and-address">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                        </div>

                        <!-- Amount to withdraw -->
                        <div class="input-wrapper d-flex flex-column position-relative mt-4 w-100">
                            <label for="full-address" class="ps-2">Points to withdraw</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2"  placeholder="35000 points"
                                    id="full-address">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                            <div class="available-balance-wrapper text-success d-flex gap-1">
                                <p class="ps-2 mb-0">Available balance</p>
                                <p class="mb-0">500000 <span>points</span></p>
                            </div>
                        </div>
                        <button class="button-submit border-0 mt-4 w-100">Proceed</button>

                    </div>




                    {{-- WITHDRAWAL FORM 2 NAIRA --}}

                    <div class="withdrawal-method-form-wrapper-2 p-wrap rounded-1 w-100 ">

                        <!-- Wema Account name -->
                        <div class="input-wrapper d-flex flex-column position-relative w-100">
                            <label for="account_name" class="ps-2">Account name</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2" placeholder="Account name"
                                    id="account_name">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                        </div>



                        <!-- Bank name -->
                        <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                            <label for="bank-name" class="ps-2">Bank name</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2" value="Wema Bank"
                                    placeholder="Bank name" id="bank-name">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                        </div>



                        <!-- Account number -->
                        <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                            <label for="account-number" class="ps-2">Account number</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2" placeholder="Account number"
                                    id="account-number">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                        </div>


                        <!-- Amount to withdraw -->
                        <div class="input-wrapper d-flex flex-column position-relative mt-3 w-100">
                            <label for="full-address" class="ps-2">Points to withdraw</label>
                            <div class="position-relative w-100">
                                <input type="text" class="input-field ps-2" placeholder="35000 points"
                                    id="full-address">
                                {{-- <i class="fa-solid fa-phone input-icon"></i> --}}
                            </div>
                            <div class="available-balance-wrapper text-success d-flex gap-1">
                                <p class="ps-2 mb-0">Available balance</p>
                                <p class="mb-0">500000 <span>points</span></p>
                            </div>
                        </div>

                        <button class="button-submit border-0 mt-4 w-100">Proceed</button>
                    </div>


                </div>

            </div>

        </div>


        {{-- @include('layout.footer-copyright') --}}

    </div>



    <script>
        let payMethod1 = document.getElementById('payment-method-1');
        let payMethod2 = document.getElementById('payment-method-2');

        let paymentForm1 = document.querySelector('.withdrawal-method-form-wrapper-1');
        let paymentForm2 = document.querySelector('.withdrawal-method-form-wrapper-2');


        payMethod1.addEventListener('click', () => {
            paymentForm1.classList.remove('active');
            paymentForm2.classList.remove('active');

        });

        payMethod2.addEventListener('click', () => {
            paymentForm2.classList.add('active');
            paymentForm1.classList.add('active');

        });



        // let blinkCount = 5;

        // for (let i = 0; i < blinkCount; i++) {

        //   setTimeout(() => {
        //     paymentForm2.style.display = 'none';
        //   },  i * 5000);

        //   setTimeout(() => {
        //     paymentForm2.style.display = 'block';
        //   }, i * 5000 + 1000);
        // }


        //
    </script>


</body>

</html>
