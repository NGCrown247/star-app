<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    @extends('layouts.app')

</head>

<body>

    <div class="global-container">

                @include('layouts.navbar')

              @include('layouts.sidebar')



        <div class="my-hero-wrapper position-relative">

            <div class="my-hero d-flex flex-column align-items-center">



                {{-- ----------------HERO SECTION------------------------------------- --}}
                <div class="my-hero-content d-flex px-4 flex-column align-items-center justify-content-center">

                    <div class="my-hero-items ">
                        <h1 class="hero-title">Every Action <span class="hero-title-span">Count</span> </h1>
                        <p class="hero-descriptipn mb-5">We've revolutionized the way you engage with online content,
                            offering multiple avenues for you to turn your
                            time into income effortlessly!
                        </p>
                    </div>



                    <div class="my-hero-action-button-box w-100 gap-3 d-flex align-items-center flex-wrap">

                        <div class="my-hero-action-button-wrapper gap-3  d-flex align-items-center justify-content-start ">
                            @guest

                            <a id="join-now" class="hero-action-btn p-3 px-5 me-auto rounded-1 " href="{{route('register')}}">Join Now</a>
                            @endguest

                            <a id="watch-how" class="hero-action-btn p-3  rounded-1 d-flex align-items-center me-auto"
                                href="#">

                                <div class="watch-how-icon-box d-flex">
                                    <i class='bx bx-play fs-5 me-2'></i>
                                </div>
                                Watch
                            </a>

                        </div>


                    {{--------------HERO SOCIALS  --}}
                            @include('layouts.my-socials')



                    </div>
                </div>
            </div>
        </div>


        {{-- --------------------ABOUT SECTION------------------------ --}}

        <div class="my-about-section px-3 p-4 w-100 d-flex flex-column align-items-center pb-5">

            <h1 class="my-about-header">
                Get to Know Us
                <div class="my-about-header-lines d-flex align-items-center justify-content-center gap-1 align-items-center">
                    <div class="about-header-lines"></div>
                    <div class="about-header-lines"></div>
                    <div class="about-header-lines"></div>
                </div>
            </h1>



            {{-- --------------------ABOUT CARD --}}
            <div class="my-about-section-card-wrapper gap-3 mt-5">

                <div class="my-about-section-card shadow">

                    <h4 class="my-about-section-card-title">01</h4>

                    <p class="my-about-section-card-description">
                        Complete easy tasks and get rewarded, helping individuals facing financial challenges find new
                        ways to improve their financial stability.
                    </p>

                </div>

                <div class="my-about-section-card shadow">

                    <h4 class="my-about-section-card-title">02</h4>
                    <p class="my-about-section-card-description">
                        We strive to be a beacon of hope, uniting people in mutual support. Together, we can overcome
                        financial challenges and build a thriving community.
                    </p>
                </div>

                <div class="my-about-section-card shadow">
                    <h4 class="my-about-section-card-title">03</h4>

                    <p class="my-about-section-card-description">
                        We provide multiple withdrawal options, including local bank withdrawal, ensuring you can access
                        your earnings easily whenever needed.
                    </p>

                </div>

            </div>

        </div>




       {{-- FOOTER --}}
        @include('layouts.footer')

            {{-- ----IMPORTANT LINKS --}}

            @include('layouts.footer-copyright')

<a class="d-flex align-items-center shadow  d-none" href="#navbar" id="scrollUpBtn">
    <i class='bx bx-up-arrow-alt'></i>
</a>

    </div>

</body>

</html>
