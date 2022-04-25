<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{

    public function index(): \Inertia\Response
    {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'teamMember' => Member::select('name', 'designation')->get()->groupBy('designation')
        ]);
    }
}
