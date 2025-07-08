<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifications</title>

    @include('layouts.app')
</head>

<body>
    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')

        <div class="pages-row d-flex flex-column p-2 mt-2 mb-3 w-100 align-items-center rounded">


            <div class="video-container shadow p-3 rounded-2 m-auto d-flex gap-2 w-100">
                <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                    {{-- @include('layouts.arrow-icon') --}}
                    <h4 class="text-center w-100 mb-2">Notifications</h4>
                </div>


                <div class="accordion accordion-flush w-100 gap-2 d-flex flex-column">
                    <div class="accordion-item rounded-1 border-0  w-100">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-btn collapsed border-0 w-100 d-flex justify-content-between gap-3"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">

                                <div class="notification-details-wrap d-flex flex-column w-100 notification-preview">
                                    <div class="notification-details-title-wrap mb-1 d-flex align-items-center gap-2">
                                        <h6 class="mb-0 fw-bold">Withdrawal Successful</h6>
                                        <div class="notification-time-date text-end d-flex">
                                            <small class="text-muted">3h ago</small>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        Dear <span class="fw-bold">Frank</span>, your withdrawal was successful. Please
                                        allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                    </p>
                                </div>


                            </button>
                        </h2>

                        <!-- Fake target to trigger collapse -->
                        <div id="flush-collapseOne" class="accordion-collapse" data-bs-parent=".accordion"></div>
                    </div>


                    {{-- ------------notification 2-----------  --}}

                    <div class="accordion-item rounded-1 border-0 shadow-sm w-100">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-btn collapsed border-0 w-100 d-flex justify-content-between gap-3"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                aria-expanded="false" aria-controls="flush-collapseOne">

                                <div class="notification-details-wrap d-flex flex-column w-100 notification-preview">
                                    <div class="notification-details-title-wrap mb-1 d-flex align-items-center gap-2">
                                        <h6 class="mb-0 fw-bold">Withdrawal Successful</h6>
                                        <div class="notification-time-date text-end d-flex">
                                            <small class="text-muted">3h ago</small>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        Dear <span class="fw-bold">Frank</span>, your withdrawal was successful. Please
                                        allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                    </p>
                                </div>


                            </button>
                        </h2>

                        <!-- Fake target to trigger collapse -->
                        <div id="flush-collapse2" class="accordion-collapse" data-bs-parent=".accordion"></div>
                    </div>


                    {{-- ------------notification 3-----------  --}}

                    <div class="accordion-item rounded-1 border-0 shadow-sm w-100">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-btn collapsed border-0 w-100 d-flex justify-content-between gap-3"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                aria-expanded="false" aria-controls="flush-collapseOne">

                                <div class="notification-details-wrap d-flex flex-column w-100 notification-preview">
                                    <div class="notification-details-title-wrap mb-1 d-flex align-items-center gap-2">
                                        <h6 class="mb-0 fw-bold">Withdrawal Successful</h6>
                                        <div class="notification-time-date text-end d-flex">
                                            <small class="text-muted">3h ago</small>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        Dear <span class="fw-bold">Frank</span>, your withdrawal was successful. Please
                                        allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                    </p>
                                </div>


                            </button>
                        </h2>

                        <!-- Fake target to trigger collapse -->
                        <div id="flush-collapse3" class="accordion-collapse" data-bs-parent=".accordion"></div>
                    </div>


                    {{-- ------------notification 4-----------  --}}

                    <div class="accordion-item rounded-1 w-100">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-btn collapsed border-0 w-100 d-flex justify-content-between gap-3"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4"
                                aria-expanded="false" aria-controls="flush-collapseOne">

                                <div class="notification-details-wrap d-flex flex-column w-100 notification-preview">
                                    <div class="notification-details-title-wrap mb-1 d-flex align-items-center gap-2">
                                        <h6 class="mb-0 fw-bold">Withdrawal Successful</h6>
                                        <div class="notification-time-date text-end d-flex">
                                            <small class="text-muted">3h ago</small>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        Dear <span class="fw-bold">Frank</span>, your withdrawal was successful. Please
                                        allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                        your withdrawal was successful. Please allow 24 to 48 hours for the funds
                                        to reflect in your account. If you do not receive the funds within this period,
                                        kindly contact us for assistance.
                                    </p>
                                </div>


                            </button>
                        </h2>

                        <!-- Fake target to trigger collapse -->
                        <div id="flush-collapse4" class="accordion-collapse" data-bs-parent=".accordion"></div>
                    </div>





                </div>


            </div>
        </div>

        {{-- @include('layouts.footer-copyright') --}}
    </div>
</body>

</html>
