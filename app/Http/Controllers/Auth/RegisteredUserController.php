<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{

    public function create(): \Inertia\Response
    {

        return Inertia::render('Join', [
            'networks' => Network::orderBy('name', 'asc')
                ->paginate(20)
                ->through(fn ($network) => [
                    'id' => $network->id,
                    'name' => $network->name,
                ])
        ]);
    }


    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|unique:users',
            'address'  => 'required|string',
            'nid_no'  => 'required|string',
            'smartlink_code'  => 'required|string',
            'fb_link'  => 'required',
            'network_id'  => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'n_id_no' => $request->nid_no,
            'fb_link' => $request->fb_link,
            'network_id'  => $request->network_id,
            'password' => Hash::make($request->password),
            'smartlink_code' => $request->smartlink_code,
        ]);

        $user->assignRole('member');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
