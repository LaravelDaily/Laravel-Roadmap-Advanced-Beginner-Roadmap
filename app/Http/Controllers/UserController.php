<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $withDeleted = null;

        if (in_array(request('deleted'), User::FILTER) && request('deleted') === 'true') {
            $withDeleted = true;
        }

        $users = User::with('roles')
            ->when($withDeleted, function ($query)  {
                $query->withTrashed();
            })
            ->paginate(20);

        return view('users.index', compact('users', 'withDeleted'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(EditUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
