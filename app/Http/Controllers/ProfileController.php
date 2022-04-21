<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return Inertia::render('Profile');
    }
}
