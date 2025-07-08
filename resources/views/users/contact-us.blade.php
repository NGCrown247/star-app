<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    @include('layouts.app')

</head>

<body>


    <div class="global-container d-flex flex-column w-100 align-items-center">
        @include('layouts.navbar')
        @include('layouts.sidebar')



        <div class="pages-row d-flex flex-column p-2 mt-2 mb-3 w-100 align-items-center rounded">

            <div class="contact-us-wrapper shadow rounded-1 d-flex gap-4 p-3 flex-wrap align-items-center">

                     <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                {{-- @include('layouts.arrow-icon') --}}
                <h4 class="text-center w-100 mb-2">Talk To Us</h4>


                    <h5>Got an idea? No problem, Let's team up.</h5>
                    <p>Tell us more about yourself and what you've got in mind.</p>
            </div>

                {{-- contact us left wrapper --}}
                <div class="contact-us-left-wrapper d-flex flex-column gap-3 p-3">
                    <div class="contact-us-items">
                        <h5>Contact us</h5>
                        <p class="m-0">Our friendly team are here to help.</p>
                        <p>hi@xingtask.com</p>
                    </div>

                    <div class="contact-us-items">
                        <h5>Whatsapp</h5>
                        <a class="whatsapp-num text-decoration-underline" href="#">+2347081859813</a>
                    </div>

                    <div class="contact-us-items">
                        <h5>Call us</h5>
                        <p class="m-0">Mon-Fri from 8am to 5pm.</p>
                        <p>+2348146609893</p>
                    </div>
                </div>

                {{-- contact us right wrapper --}}
                <div class="contact-us-right-wrapper w-100 p-3 d-flex flex-column align-items-center m-auto rounded">

                    <div class="contact-us-form-wrapper d-flex flex-column w-100 gap-3">
                        <div class="input-wrapper">
                            <input type="text" class="input-field w-100 p-2 rounded-1" placeholder="Your name">
                        </div>
                        <div class="input-wrapper">
                            <input type="email" class="input-field w-100 p-2 rounded-1" placeholder="Email">
                        </div>

                        <div class="input-wrapper">
                            <input type="tel" class="input-field w-100 p-2 rounded-1" placeholder="Whatsapp number">
                        </div>

                        <div class="input-wrapper">
                            <textarea name="contact_message" id="" class="input-field w-100 p-2 rounded-1"
                                placeholder="Tell us what you've got here..."></textarea>
                        </div>

                        <button class="button-submit ms-auto border-0 p-2 px-3 rounded-1">Submit</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- @include('layouts.footer-copyright') --}}

    </div>


</body>

</html>
