<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
public function update(UpdateUserRequest $request, $id)
{


   $user = User::findOrFail($id);

   if(!empty($request->new_password)) {

    if (!Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Password is incorrect!'], 400);
    }
  }
    $data = $request->validated();

    if (!empty($request->new_password)) {
        $data['password'] = Hash::make($request->new_password);
    } else {
        unset($data['password']);
    }

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('profile-images', 'public');
        // return $data;
    } else {
        unset($data['image']); // Prevent accidental image removal if no new file is uploaded
    }

     $user->update($data);
    return response()->json(['message'=>'Update Successful!']);
}


}
