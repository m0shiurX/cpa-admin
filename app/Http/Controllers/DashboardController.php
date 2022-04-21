<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        $roles = $request->user()->getRoleNames();

        if ($roles->contains('member')) {
            return $this->memberDashboard();
        } else if ($roles->contains('manager')) {
            return $this->managerDashboard();
        } else if ($roles->contains('admin')) {
            return $this->adminDashboard();
        } else {
            return Redirect::route('home');
        }
    }


    private function memberDashboard()
    {
        return Inertia::render('MemberDashboard');
    }

    private function managerDashboard()
    {
        return Inertia::render('Dashboard');
    }

    private function adminDashboard()
    {
        return Inertia::render('AdminDashboard');
    }
}
