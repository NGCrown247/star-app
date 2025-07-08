<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    @include('layouts.app')

</head>

<body class="about-body">
    <div class="about-page-row w-100">

        <div class="about-container w-100">

            <div class="pages-header-box position-relative d-flex flex-column pt-4 w-100 align-items-center">
                <h1 class="">About</h1>
                <p class="mt-4 text-center px-3">
                    We believe every moment spent online should count for something, to transform how people use
                    their time
                    and data. In a world where many scroll endlessly without reward, we're creating a space
                    where
                    every click,
                    task, and effort, even the smallest is recognized and rewarded.
                </p>
            </div>

            <div class="about-card-container w-100 p-2">


                <div
                    class="about-card-wrapper shadow rounded gap-2 mt-4 d-flex p-3 w-100 m-auto d-flex align-items-center">
                    <div class="about-wrapper-card align-items-center d-flex flex-column">
                        <img src="{{ asset('images/about-page-icon1.svg') }}" alt="">
                        <div class="about-card-items">

                            <h5>We understand the frustration</h5>
                            <p>
                                You have skills, you’ve earned certificates, you’re capable but still, no job. For
                                others,
                                education
                                might have been out of reach, but the desire to work and earn is stronger than ever.
                                That’s
                                where we
                                come in.
                            </p>
                        </div>

                    </div>


                    <div class="about-wrapper-card align-items-center d-flex flex-column">
                        <img src="{{ asset('images/about-page-icon2.svg') }}" alt="">

                        <div class="about-card-items">
                            <h5>Our platform is designed for everyone</h5>
                            <p>
                                Whether you're watching, reading, engaging, or completing simple tasks, you're earning
                                cent
                                by cent.
                                It may start small, but every cent brings you closer to something real.
                            </p>
                        </div>
                    </div>
                    <div class="about-wrapper-card align-items-center d-flex flex-column">
                        <img src="{{ asset('images/about-page-icon3.svg') }}" alt="">

                        <div class="about-card-items">
                            <h5>This isn't just a website. It's a movement</h5>
                            <p>
                                A home for the talented, the job-seeking, the determined, and the overlooked. We’re
                                giving
                                power back
                                to the people, one task, one cent, one opportunity at a time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="about-founder-message shadow d-flex gap-2 mb-4 m-auto rounded p-3 mt-4">
                <div class="about-founder-message-img-box rounded shadow">
                    <img src="{{ asset('images/lady-open-mouth.jpg') }}" alt="">

                </div>
                <div class="about-founder-message-items">

                    <h5>Founder’s Message</h5>
                    <p>
                        “I’ve seen too many people with talent go unnoticed. This platform is my way of saying you
                        matter,
                        and your time is worth something.”
                    </p>
                </div>

            </div>


            {{-- CALL TO ACTION  --}}
            <div class="about-cta-wrapper w-100 p-5 text-center">
                <p class="mb-2">Don’t let your skills go unnoticed. Start earning for what you already do online.</p>
                <button class="border-0 p-3 px-5 mt-3" id="getStarted">Get Started</button>
                <button class="border-0 p-3 px-5 mt-3" id="startAlert">Start Alert</button>
            </div>


        </div>

    </div>

    {{-- FOOTER --}}
    @include('layouts.footer')
    @include('layouts.footer-copyright')





    <div class="popup" id="popup">
        <div class="popup-overlay"></div>
        <div id="popup-body" class="popup-body d-flex flex-column align-items-center justify-content-center">
            <h5>Register</h5>
            <div class="closeTimes" id="closeTimes">&times;</div>
            <input type="text" name="" id="" placeholder="Name">
            <input type="text" name="" id="" placeholder="Email">
            <input type="text" name="" id="" placeholder="Phone number">
            <input type="text" name="" id="" placeholder="password">

            <button class="border-0" id="bt-submit" x-text="btnType">Register
                <span id="loading" class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                <span id="loading" role="status">Loading...</span>
            </button>
        </div>
    </div>



    <div class="popAlert">
      <div id="popAlert" class="popAlert-body d-flex flex-row shadow">
        <i class='bx  bx-badge-check'  ></i>
      <p class="m-0">Login Successful</p>
      </div>

    </div>

</body>

</html>
