<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>

  @extends('layouts.app')
</head>

<body>

  <div class="my-dash-wrapper">

  @include('layouts.header')


  <div class="my-container" x-data="userApp">
  <div class="my-dash-row p-4">

    <div class="my-main-profile-content p-4 w-100 border rounded align-items-center  justify-content-center">

      <h4 class="referral-header w-100 text-center mb-3">Profile</h4>

      <div class="my-user-profile-edit-head w-100 align-items-center d-flex flex-column">

        <div class="my-dash-user-dropdown-content w-100 d-flex flex-column align-items-center">

          <div class="all-img-box profile-img-box">
            <img src="{{asset(Auth::user()->image)}}" alt="user">
        </div>

        <h6 class="m-0 mt-1">{{ Auth::user()->full_name }}</h6>
        <p class="" >{{ Auth::user()->email}}</p>


      </div>

      <label for="profile-image" class="rounded border p-1 px-3 text-white bg-secondary  ">Upload</label>
      <input
      type="file" id="profile-image"
      class="m-auto rounded border p-1"
      @change="setFile($event)"
      style="display: none">
      </div>


        <div class="my-user-profile-edit-form-box w-100 mt-5 rounded">

          <div class="form-group w-100 mt-3">
            <input type="text"
            class="form-control "
            :class="{'border border-danger bg-danger bg-opacity-10 ': errors.full_name}"
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

        </div>
{{-- ------------------------------------------------ --}}

        <div class="my-user-profile-edit-password-update-box mt-3 rounded">

          <div class="form-group w-100">
            <input type="text"
            class="form-control "
            :class="{'border border-danger bg-danger bg-opacity-10 ': errors.password}"
            placeholder="Current Password"
            x-model="userForm.password">

          <span class="error-message text-danger ms-2" x-text="errors.password"></span>
          </div>

          <div class="form-group w-100">
            <input type="text"
            class="form-control "
            :class="{'border border-danger bg-danger bg-opacity-10 ': errors.password}"
            placeholder="New Password"
            x-model="userForm.new_password">

          <span class="error-message text-danger ms-2" x-text="errors.password"></span>
          </div>

          <div class="form-group w-100">
            <input type="text"
            class="form-control "
            :class="{'border border-danger bg-danger bg-opacity-10 ': errors.password}"
            placeholder="Confirm Password"
            x-model="userForm.confirm_password">

          <span class="error-message text-danger ms-2" x-text="errors.password"></span>
          </div>

        </div>


        <button :disabled="btnDisabled" type="submit" class="btn-submit btn btn-primary mt-3 mb-3" @click="handleUpdate()">
          <span x-show="isLoading" class="spinner-border spinner-border-sm" aria-hidden="true"></span>
          Update
        </button>

      </div>

    </div>

    <div class="my-user-profile-delete-box">

    <button class=" btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Account</button>
    <p class="mb-5 text-danger">Before you delete your account Note that this action can not be undone. All asset will be lost.</p>
    </div>

  </div>

{{-- DELETE MODAL --}}
<div class="modal fade"  id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h1 class="modal-title fs-5 text-white" id="deleteModalLabel">Confirm Account Deletion</h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this item? This action cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

        <form action="{{route('users.delete')}}" method="POST">
          @csrf
        <button type="submit" class="btn btn-danger" id="confirmDelete">Delete</button>
        </form>

      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>
