<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function showReport()
    {
        return Inertia::render('Report');
    }
}
