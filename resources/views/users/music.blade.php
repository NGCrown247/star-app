<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music</title>

    @include('layouts.app')

</head>

<body>

    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')


        <div class="pages-row d-flex w-100 flex-wrap p-2  mb-3 align-items-center rounded">

            {{-- CONTENT START HERE --}}

            <div class="music-container shadow p-3 rounded-2 m-auto d-flex flex-wrap m-auto gap-2">
    <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2 mb-2">

                {{-- @include('layouts.arrow-icon') --}}
                <h4 class="text-center w-100 mb-2">Music</h4>
            </div>


                <div class="alert alert-warning text-center w-100 mb-2 p-2" role="alert">
                    ⚠️ <strong>Warning:</strong>
                    You must play to the end. If cheating is detected, you will not be paid.
                    We strongly advise you to read the platform's
                    <a class="text-decoration-underline" href="#">Terms of Use</a> before proceeding!
                </div>



                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>

                         <button type="button" disabled class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}

                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>
                         <button type="button" disabled class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}

                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>
                         <button type="button" disabled class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}

                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>
                         <button type="button" disabled class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}

                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>
                       <button type="button" disabled class="claim-reward px-2 p-1  rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}

                <div class="music-wrapper  p-2 rounded-1 align-items-center w-100">

                    <div class="music-text-wrapper2 w-100 d-flex ">
                        <div class="music-img-wrapper">
                            <img src="{{ asset('images/mercy-chinwo.png') }}" alt="Mercy Chinwo Image">
                        </div>

                        <div class="music-text-wrapper ms-2 w-100 ">
                            <h6 class="mb-0">Mercy Chinwo</h6>
                            <p class="mb-0">We Move</p>
                        </div>


                        <div class="music-play-icon-wrapper ms-auto p-2 d-flex align-items-center">
                            <i class='bx bx-play'></i>
                        </div>

                    </div>

                    <div class="music-post-time-reward d-flex flex-wrap gap-3 align-items-center justify-content-end">
                        <p class="mb-0 muted-text">2 hours ago</p>
                         <button type="button" disabled class="claim-reward px-2 p-1 rounded-2  border-0 mb-0 ms-auto">
                            Claim
                            <span>2500</span>
                            <span>points</span>
                        </button>
                    </div>


                </div>


                {{-- ----------------------------------------------------- --}}


            </div>





        </div>


        {{-- @include('layouts.footer-copyright') --}}

    </div>


</body>

</html>
