<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller
{
    public function dashboard() {

        return view('admin.dashboard');

    }


}
