<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Aboutcontroller extends Controller
{
    public function about() {
        session()->flash('name', 'Naseem Baloch');
    return view('about');
    }
}
