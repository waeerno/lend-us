<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $category   = 'Welcome';
        $page       = 'Dashboard';
        return view(
            'backoffice.dashboard.index',
            compact('category', 'page')
        );
    }
}
