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
                    'nid_verified' => $user->is_n_id_verified,
                    'smartlink_code' => $user->smartlink_code,
                    'fb_link' => $user->fb_link,
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
                'fb_link' => $user->fb_link,
                'network_id' => $user->network_id,
                'network_name' => $user->network?->name,
                'smartlink_code' => $user->smartlink_code,
                'nid_verified' => $user->is_n_id_verified,
                'is_approved' => $user->is_approved,
                'nid_front' => $user->n_id_front_path,
                'nid_back' => $user->n_id_back_path,
                'nid_no' => $user->n_id_no,
                'role'  => $user->getRoleNames(),
            ]
        ]);
    }

    public function approveMember(User $user)
    {
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
                'fb_link' => $user->fb_link,
            ]
        ]);
    }

    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     $user->update($request->validated());

    //     return Redirect::route('networks.index')->with('success', 'Successfully updated.');

    //     // return Redirect::back()->with('success', 'Successfully updated.');
    // }


    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::route('users.index')->with('success', 'Successfully deleted.');
    }
}
