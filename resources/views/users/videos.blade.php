<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos</title>

    @include('layouts.app')

</head>

<body>


    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')



        <div class="pages-row d-flex w-100 flex-wrap p-2 mb-3 align-items-center rounded">






            {{-- CONTENT START HERE --}}

            <div class="video-container shadow p-3 rounded-2 m-auto d-flex gap-2 w-100">

                <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                    {{-- @include('layouts.arrow-icon') --}}
                    <h4 class="text-center w-100 mb-2">Videos</h4>
                </div>


                <div class="alert alert-warning text-center w-100 mb-2 p-2" role="alert">
                    ⚠️ <strong>Warning:</strong>
                    You must watch to the end. If cheating is detected, you will not be paid.
                    We strongly advise you to read the platform's
                    <a class="text-decoration-underline" href="#">Terms of Use</a> before proceeding!
                </div>



                <div class="video-wrapper d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>
                </div>

                {{-- ------------------------------------------------------------ --}}


                <div class="video-wrapper d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>

                    </div>


                </div>

                {{-- ------------------------------------------------------------ --}}



                <div class="video-wrapper d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>

                    </div>

                </div>

                {{-- ------------------------------------------------------------ --}}



                <div class="video-wrapper d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>

                    </div>

                </div>

                {{-- ------------------------------------------------------------ --}}



                <div class="video-wrapper  d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>

                    </div>

                </div>

                {{-- ------------------------------------------------------------ --}}



                <div class="video-wrapper  d-flex align-items-center w-100">
                    <div class="video-box">
                    </div>
                    <div class="video-item-img-wrapper me-2">
                        <img src="{{ asset('images/youtube-logo.jpg') }}" alt="image">
                    </div>
                    <div class="video-item-text-wrapper w-100">
                        <h6 class="mb-1">How I Learned to Code in 4 Months & Got
                            a Job! No CS Degree, No Bootcamp.
                        </h6>

                        <div class="video-time-date-wrapper d-flex">
                            <p class="video-date m-0 muted-text px-2">2 hours ago</p>
                        </div>

                        <button type="button" class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>

                    </div>
                </div>

                {{-- ------------------------------------------------------------ --}}



            </div>

        </div>


        {{-- @include('layouts.footer-copyright') --}}

    </div>


</body>

</html>
