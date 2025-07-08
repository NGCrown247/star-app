

 <div class="my-footer d-flex justify-content-around p-4  gap-5">

            {{-- FOOTER LEFT ITEMS --}}
            <div class="my-footer-left-content w-100 d-flex flex-column align-items-center ">
                <div class="my-footer-description-title-box">
                    {{-- --------FOOTER LOGO--------- --}}
                     @include('layouts.logo')
                    <p class="my-footer-description w-100">
                        We've revolutionized the way you engage with online content, offering multiple avenues for you to turn your time into income effortlessly!
                    </p>
                </div>

                {{-- ----------FOOTER SOCIAL ITEMS --}}
                    <div class="mt-2 w-100">
                 @include('layouts.my-socials')
                    </div>

                </div>

                {{-- ----FOOTER RIGHT ITEMS --}}
            <div class="my-footer-right-content w-100 d-flex flex-column align-items-start">

                <div class="my-footer-links-box d-flex gap-3 flex-wrap">

                    {{-- ---LINK 1 --}}
                        <nav class="footer-links">
                            <h6 class="footer-plan-title">Plans</h6>

                             <ul class="my-footer-ul list-unstyled align-items-center m-0 gap-4">
                        <li><a class="" href="#">Pricing</a></li>
                    </ul>
                        </nav>

                         {{-- ---LINK 3 --}}
                                       <nav class="footer-links">
                            <h6 class="footer-plan-title">Resources</h6>
                             <ul class="my-footer-ul list-unstyled align-items-center m-0 gap-4">
                        <li><a class="" href="#">Blog</a></li>
                        <li><a class="" href="#">Guide</a></li>
                    </ul>
                        </nav>

                         {{-- ---LINK 3 --}}
              <nav class="footer-links">
                            <h6 class="footer-plan-title">Platform</h6>

                             <ul class="my-footer-ul list-unstyled align-items-center m-0 gap-4">
                        <li><a class="" href="#">About</a></li>
                        <li><a class="" href="#">Reviews</a></li>
                        <li><a class="" href="#">Contact</a></li>
                    </ul>
                        </nav>
                </div>
            </div>
        </div>
