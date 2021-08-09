<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateProfileContactRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update(UpdateProfileContactRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect()->route('profile.index')->with('status', 'Contacts updated.');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        auth()->user()->update([
            'password' => bcrypt($request->new_password),
        ]);

        return redirect()->route('profile.index')->with('status', 'Password changed.');
    }
}
