<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>

  @include('layouts.app')
</head>
<body>


  <div class="register-container">
    <div class="register-row p-3" >

      <div x-data="userApp" class="register-content  border rounded p-4">
        <a class="register-content-login" href="#" @click="openLoginPage()">Login</a>

        <h3 class="w-100 text-center">Register</h3>


        <div class="form-group w-100 mt-3">
          <input type="text"
          class="form-control "
          :class="{'border border-danger bg-danger bg-opacity-10 ': errors.full_name}"
          value="{{ old('full_name') }}"
          placeholder="Full name"
          x-model="userForm.full_name"
          autocomplete="full_name">
        </div>
        <span class="error-message text-danger ms-2 " x-text="errors.full_name"></span>


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
      <input type="tel"
      class="form-control "
      :class="{'border border-danger bg-danger bg-opacity-10 ': errors.phone_number}"
      value="{{ old('phone_number') }}"
      placeholder="Phone number"
      x-model="userForm.phone_number"
      autocomplete="phone_number">
    </div>
    <span class="error-message text-danger ms-2 " x-text="errors.phone_number"></span>


    <div class="form-group w-100">
      <input type="text"
      class="form-control "
      :class="{'border border-danger bg-danger bg-opacity-10 ': errors.address}"
      value="{{ old('address') }}"
      placeholder="Address"
      x-model="userForm.address"
      autocomplete="address">
    </div>
    <span class="error-message text-danger ms-2 " x-text="errors.address"></span>


    <div class="form-group w-100">
      <input type="text"
      class="form-control "
      :class="{'border border-danger bg-danger bg-opacity-10 ': errors.password}"
      placeholder="Password"
      x-model="userForm.password">

    <span class="error-message text-danger ms-2" x-text="errors.password"></span>

    </div>


    <div class="form-group">
      <small class=" register-terms-and-privacy ms-2">Click here to read <a class="" href="#">Terms of Services</a> and <a href="#">Privacy Policy</a> </small>

      <button :disabled="btnDisabled" type="submit" class="btn-submit btn btn-primary mt-3 mb-3" @click="handleCreate()">
      <span x-show="isLoading" class="spinner-border spinner-border-sm" aria-hidden="true"></span>
      Register
    </button>
  </div>

      </div>

    </div>
  </div>

</body>
</html>
