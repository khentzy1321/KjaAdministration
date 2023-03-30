<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit(){

        $users = User::paginate(10);

        return view('users.edit', compact('users'));
    }

    public function update(UserRequest $request, User $user)
    {
        $hasPassword = $request->get('password');

        $request->merge(['password' => Hash::make($request->get('password'))]);

        $request->except([$hasPassword ? '' : 'password']);

        $user->update($request->all());

        return redirect()->route('profile.index')->with('toast_success','User Updated');
    }
}
