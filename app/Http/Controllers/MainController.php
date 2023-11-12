<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexMain()
    {
        return view('indexMain');
    }

    public function example()
    {
        return 10;
    }
}
