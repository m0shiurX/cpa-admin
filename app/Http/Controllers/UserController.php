<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::role('member')->orderBy('name', 'asc')
                ->paginate(10)
                ->through(fn ($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'address' => $user->address,
                    'network_id' => $user->network_id,
                    'smartlink_code' => $user->smartlink_code,
                    'is_approved' => $user->is_approved,
                    'created_at' => Carbon::parse($user->created_at)->format('M d, Y'),
                ]),
        ]);
    }

    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address,
                'network_id' => $user->network_id,
                'smartlink_code' => $user->smartlink_code,
                'is_approved' => $user->is_approved,
                'role'  => $user->role
            ]
        ]);
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address,
                'network_id' => $user->network_id,
            ]
        ]);
    }

    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     $user->update($request->validated());

    //     return Redirect::route('networks.index')->with('success', 'Successfully updated.');

    //     // return Redirect::back()->with('success', 'Successfully updated.');
    // }

    // public function create()
    // {
    //     return Inertia::render('Users/Create');
    // }

    // public function store(UpdateUserRequest $request)
    // {
    //     User::create($request->validated());
    //     return Redirect::route('networks.index')->with('success', 'Successfully updated.');

    //     // return Redirect::back()->with('success', 'Successfully updated.');
    // }


    // public function destroy(User $user)
    // {
    //     $user->delete();
    //     return Redirect::route('networks.index')->with('success', 'Successfully deleted.');
    // }
}
