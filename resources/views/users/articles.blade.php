<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>

    @include('layouts.app')

</head>

<body>

    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')


        <div class="pages-row d-flex w-100 flex-wrap p-2  mb-3 align-items-center rounded">

            {{-- CONTENT START HERE --}}

            <div class="articles-container shadow w-100 p-3 rounded-2 d-flex gap-2">
    <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-2">

                {{-- @include('layouts.arrow-icon') --}}
                <h4 class="text-center w-100 mb-2">Articles</h4>
            </div>

                {{-- ARTICLES CARD 1 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based on
                                hard science</h5>
                        </div>

                        <div class="article-bottom-items mt-3 d-flex gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>


                {{-- ARTICLES CARD 2 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based on
                                hard science</h5>
                        </div>

                        <div class="article-bottom-items d-flex mt-3 gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>




                {{-- ARTICLES CARD 3 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based on
                                hard science</h5>
                        </div>

                        <div class="article-bottom-items d-flex mt-3 gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>




                {{-- ARTICLES CARD 4 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based on
                                hard science</h5>
                        </div>

                        <div class="article-bottom-items d-flex mt-3 gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>



                {{-- ARTICLES CARD 5 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based
                                on hard science</h5>
                        </div>

                        <div class="article-bottom-items d-flex mt-3 gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>



                {{-- ARTICLES CARD 6 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based
                                on hard science</h5>
                        </div>

                        <div class="article-bottom-items mt-3 d-flex gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>



                {{-- ARTICLES CARD 6 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based
                                on hard science</h5>
                        </div>

                        <div class="article-bottom-items mt-3 d-flex gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>


                {{-- ARTICLES CARD 6 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based
                                on hard science</h5>
                        </div>

                        <div class="article-bottom-items mt-3 d-flex gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>

                        </div>
                    </div>
                </div>


                {{-- ARTICLES CARD 6 --}}
                <div class="articles-card  d-flex flex-column rounded-1 w-100 p-2">
                    <div class="article-img-box rounded-1">
                        <img class="rounded-1" src="{{ asset('images/gym-man.png') }}" alt="">
                    </div>
                    <div class="article-items">
                        <div class="article-top-items py-2 d-flex align-items-center gap-2">
                            <div class="article-top-img-box">
                                <img src="{{ asset('images/my-logo-01.svg') }}" alt="">
                            </div>

                            <div class="article-poster-details">
                                @include('layouts.site-name')
                            </div>
                            <div class="dot bg-secondary"></div>
                            <p class="mb-0 muted-text">10 minutes ago</p>
                        </div>

                        <div class="article">
                            <h5 class="mb-0">Want to live to a healthy old age? Here’s what a top doctor does based
                                on hard science</h5>
                        </div>

                        <div class="article-bottom-items mt-3 d-flex gap-2 align-items-center">
                            <p class="mb-0">105 <span>views</span></p>
                            <a href="#" class="mb-0 read-to-earn p-2 rounded-1">Read to earn($)</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- @include('layouts.footer-copyright') --}}


        </div>
    </div>
</body>

</html>
