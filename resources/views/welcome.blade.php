<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  @extends('layouts.app')

</head>


<body x-data="userApp">

<section class="hero-section" >
@include('layouts.header')

<div class="hero">

<div class="star-hero-img-box">

@include('layouts.vision-svg')

</div>

<div class="star-hero-content">
  <h1>Every Action Count </h1>
  <p>We've revolutionized the way you engage with online content, offering multiple avenues for you to turn your
  time into income effortlessly!</p>

  @guest
  <div class="hero-action-box">
  <button type="button" class="btn get-started shadow"  @click="openEmailVerifyReg()">Get Started</button>
  <button type="button" class="read-more shadow">Read More</button>


  </div>
  @endguest

</div>
</div>
</section>

<div class="my-container ">

<h4 class="promise-text text-center mt-5">Our Promise</h4>


@include('layouts.about-us')


{{-- @include('layouts.caruosel') --}}


{{-- @include('layouts.plan-card') --}}


</div>
<!-- IMAGES SLIDE -->


<!-- PLAN SECTION -->






<footer class="star-footer">

  @include('layouts.footer')
  @include('layouts.social-icons')

</footer>




<!-- MODAL -->
<div class="modal fade rounded-3" id="emailVerifyRegModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog rounded-3 modal-dialog-centered">
    <div class="modal-content rounded-3">

      <div class="modal-body rounded-3">

      <div class="modal-header ">
        <h1 class="modal-title text-center w-100 fs-5" id="staticBackdropLabel" x-text="modalTitle"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <p class="text-center" x-text="paragraphTitle"></p>

      <div class="form-group">
        <input type="email"
               class="form-control p-2"
               :class="{'border border-danger bg-danger bg-opacity-10 ': errors.email}"
               name="email"
               placeholder="Email"
               x-model="email"
               autocomplete="email">
    </div>
    <span class="error-message text-danger ms-2 " x-text="errors.email ? errors.email[0] : ''"></span>



    <button :disabled="btnDisabled" type="submit" class="btn-submit btn btn-primary mt-4 mb-3" @click=" handleEmailVerifySubmit()">
    <span x-show="isLoading" class="spinner-border spinner-border-sm" aria-hidden="true"></span>
     Submit</button>


      </div>
      </div>
      </div>
      </div>

</body>
</html>
