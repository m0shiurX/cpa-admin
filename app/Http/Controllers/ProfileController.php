<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function showProfile(Request $request)
    {
        $roles = $request->user()->getRoleNames();

        if ($roles->contains('member')) {
            return $this->memberProfile($request);
        } else if ($roles->contains('manager')) {
            return $this->adminProfile();
        } else if ($roles->contains('admin')) {
            return $this->adminProfile();
        } else {
            return Redirect::route('dashboard');
        }
    }


    public function memberProfile(Request $request)
    {
        $user = $request->user();
        return Inertia::render('Profile', ['info' => $user]);
    }
    public function adminProfile()
    {
        # code...
    }


    public function verifyMember(Request $request)
    {
        $request->validate([
            'nid_front' => 'required|file',
            'nid_back' => 'required|file',
        ]);

        if ($request->hasFile('nid_back') && $request->hasFile('nid_front')) {
            $request->user()->update([
                'n_id_front_path' => $request->nid_front->store('nid'),
                'n_id_back_path' => $request->nid_back->store('nid'),
            ]);
        }
        return Redirect::back()->with('success', 'NID Uploaded');
    }
}
