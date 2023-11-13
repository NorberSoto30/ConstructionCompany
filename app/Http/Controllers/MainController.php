<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexMain()
    {
        return view('pages/indexMain');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function about()
    {
        return view('pages/about');
    }
}
