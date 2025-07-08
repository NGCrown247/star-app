<!-- Modal -->
<div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content plan-modal">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <div class="plan-header-text-wrapper m-auto text-center w-100">
                    <h3 class="mb-0" id="planModalLabel">Choose your plan</h3>
                    <p>Unlock endless possibilities</p>
                </div>
                <div class="modal-header-close-icon-box position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class='bx bx-x fs-3'></i>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <div class="plan-wrapper d-flex  align-items-center justify-content-center gap-3">

                    <!-- Plan Card 1 -->
                    <div class="plan-card w-100 shadow-lg p-3 rounded-2">
                        <div class="plan-card-header">
                            <h5 class="plan-text mb-0 d-flex align-items-center p-1 rounded-5">Tier 2 Plan</h5>
                        </div>
                        <p>For average earning</p>
                        <div class="plan-card-amount">
                            <h3>&#8358;<span>25000</span></h3>
                            <p class="m-0">One time payment</p>
                        </div>
                        <div class="daily-earning-wrapper d-flex">
                            <p>Daily earning &#8358;</p>
                            <span>1700</span>
                        </div>

                        <button id="sub" class="mb-3 border w-100 rounded-1 p-2">
                            <i class='bx bxs-rocket'></i>
                            Boost Now
                        </button>

                        <div class="advantages-wrapper">
                            <p class="mb-2">Advantages</p>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Watch videos</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Play music</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Chill mode</p>
                            </div>
                        </div>
                    </div>

                    <!-- Plan Card 2 -->
                    <div class="plan-card w-100 shadow-lg p-3 rounded-2">
                        <div class="plan-card-header">
                            <h5 class="plan-text mb-0 d-flex align-items-center p-1 rounded-5">Tier 3 Plan</h5>
                        </div>
                        <p>For premium earning</p>
                        <div class="plan-card-amount">
                            <h3>&#8358;<span>45000</span></h3>
                            <p class="m-0">One time payment</p>
                        </div>
                        <div class="daily-earning-wrapper d-flex">
                            <p>Daily earning &#8358;</p>
                            <span>2800</span>
                        </div>

                        <button class="mb-3 border w-100 rounded-1 p-1">
                            <i class='bx bxs-rocket'></i>
                            Boost Now
                        </button>

                        <div class="advantages-wrapper">
                            <p class="mb-2">Advantages</p>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Watch videos</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Play music</p>
                            </div>
                            <div class="advantages d-flex gap-2 align-items-center mb-2">
                                <i class='bx bx-check'></i>
                                <p class="m-0">Chill mode</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>



{{-- -----------MODAL 2/ PAYMENT METHODS --}}

<!-- Modal -->
<div class="modal fade" id="paymentMethodModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content payment-method-modal">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <div class="plan-header-text-wrapper m-auto text-center w-100">
                    <h3 class="mb-0" id="planModalLabel">Payment Methods</h3>
                </div>
                <div class="modal-header-close-icon-box position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class='bx bx-x fs-3'></i>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <div class="payment-method-wrapper d-flex  flex-column  align-items-center  w-100 gap-2">

                    <!-- Payment method Card 1 -->
                    <div class="payment-method-card shadow d-flex  flex-column w-100 align-items-center p-3 rounded">
                        <div class="payment-method-card-items d-flex align-items-center gap-3 w-100">

                            <i class='bx  bxs-credit-card'></i>
                            <p class="flutterwave-p-img mb-0 d-flex align-items-center gap-1">
                                <img src="{{ asset('cards/flutterwave-logo.svg') }}" alt="">

                                Flutterwave
                            </p>
                            {{-- <i class='bx bx-chevron-right ms-auto'></i> --}}
                        </div>

                        <div
                            class="payment-card-methods-img-wrapper w-100 gap-1  me-auto justify-content-center d-flex align-items-center">
                            <img src="{{ asset('cards/mastercard.png') }}" alt="">
                            <img src="{{ asset('cards/visacard.png') }}" alt="">
                            <img src="{{ asset('cards/vervecard.png') }}" alt="">
                            <img src="{{ asset('cards/discovercard.png') }}" alt="">
                            <img src="{{ asset('cards/american-express-card.png') }}" alt="">
                        </div>
                    </div>


                    <!-- Payment method Card 2 -->
                    {{-- ---------------------------------------------------------- --}}

                    <div class="payment-method-card shadow d-flex  flex-column w-100 align-items-center p-3 rounded
                               collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                        aria-expanded="false" aria-controls="flush-collapseOne">


                        <div class="payment-method-card-items position-relative d-flex align-items-center gap-3 w-100">

                            <i class='bx  bxs-bank'></i>
                            <p class="mb-0">
                                Naira Bank Transfer
                            </p>
                        </div>

                        <div
                            class="payment-card-methods-img-wrapper w-100 gap-1  me-auto justify-content-center d-flex align-items-center">
                            <img src="{{ asset('cards/wema-bank.svg') }}" alt="">
                            <img src="{{ asset('cards/sterling-bank-plc.svg') }}" alt="">
                        </div>
                    </div>


                    {{-- ---------------------------------------------------------- --}}
                    <div id="flush-collapseOne" class="accordion-collapse collapse w-100">

                        <div
                            class="amount-to-pay d-flex mb-3 m-auto mt-2 rounded-2 p-2 w-100 align-items-center justify-content-between">
                            <p class="mb-0">Amount to pay</p>
                            <div class="amount-to-pay-value d-flex align-items-center">
                                <span class="">&#8358;</span>
                                <span class="">50,983</span>
                            </div>
                        </div>
                        <div class="accordion-body w-100 d-flex flex-column mt-3 gap-3">
                            <div class="account-details-items d-flex w-100 align-items-center justify-content-between">
                                <p class="mb-0">Account number</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span>7812682738</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="account-details-items d-flex w-100 align-items-center justify-content-between">
                                <p class="mb-0">Account name</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span>frank chibuzor FLWFLW</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>

                            <div
                                class="account-details-items d-flex mb-3 w-100 align-items-center justify-content-between">
                                <p class="mb-0">Bank name</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span class="">Wema Bank PLC</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>

                            {{-- --------------OR--------------- --}}
                            <div class="d-flex align-items-center">
                                <hr class="flex-grow-1 w-50">
                                <span class="px-2 text-muted">OR</span>
                                <hr class="flex-grow-1 w-50">
                            </div>

                            {{-- ACCOUNT DETAILS 2 --}}

                        <div class="accordion-body w-100 d-flex flex-column mt-3 gap-3">
                            <div class="account-details-items d-flex w-100 align-items-center justify-content-between">
                                <p class="mb-0">Account number</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span>7812682738</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="account-details-items d-flex w-100 align-items-center justify-content-between">
                                <p class="mb-0">Account name</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span>frank chibuzor FLWFLW</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>

                            <div
                                class="account-details-items d-flex w-100 align-items-center justify-content-between">
                                <p class="mb-0">Bank name</p>
                                <div class="acct-wrapper d-flex align-items-center gap-1">
                                    <span class="">Wema Bank PLC</span>
                                    <button class="copy border-0 rounded">
                                        <i class='bx  bx-copy'></i>
                                    </button>
                                </div>
                            </div>

                             <div
                            class="amount-to-pay d-flex m-auto rounded-2 p-2 w-100 align-items-center justify-content-between">
                            <p class="mb-0">Amount to pay</p>
                            <div class="amount-to-pay-value d-flex align-items-center">
                                <span class="">&#8358;</span>
                                <span class="">50,983</span>
                            </div>
                        </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</div>
