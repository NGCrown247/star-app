<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  @include('layouts.app')
</head>
<body>


  <div class="register-container">
    <div class="register-row p-3" x-data="userApp">


      <div id="loginPage" class="register-content border rounded p-4">
        {{-- <a class="register-content-login" href="#" @click="openRegisterPage()">Register</a> --}}

        <h3 class="w-100 text-center">Login</h3>

     <div class="form-group w-100">
        <input type="email"
               class="form-control "
               :class="{'border border-danger bg-danger bg-opacity-10 ': errors.email}"
               name="email"
               placeholder="Email"
               x-model="userForm.email"
               autocomplete="email">
    </div>
    <span class="error-message text-danger ms-2 " x-text="errors.email ? errors.email[0] : ''"></span>




    <div class="form-group w-100">
      <input type="text"
      class="form-control "
      :class="{'border border-danger bg-danger bg-opacity-10 ': errors.password}"
      placeholder="Password"
      x-model="userForm.password">

      <span class="error-message text-danger ms-2 " x-text="errors.email ? errors.email[0] : ''"></span>



    <div class="form-check d-flex  justify-content-between">
      <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
      <a class="forgot-password me-2" href="">Forgot Password</a>
    </div>

    </div>


    <div class="form-group">
      <button :disabled="btnDisabled" type="submit" class="btn-submit btn btn-primary mt-3 mb-3" @click="handleLogin()">
      <span x-show="isLoading" class="spinner-border spinner-border-sm" aria-hidden="true"></span>
        Login
    </button>
  </div>

      </div>

    </div>
  </div>

</body>
</html>


