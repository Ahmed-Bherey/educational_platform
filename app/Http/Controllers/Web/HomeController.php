<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('web.pages.home');
    }

    public function subjects()
    {
        return view('web.pages.subjects');
    }
}