<?php

namespace Ashish\MyPackage\App\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function contactus()
    {
        return view('ashish::contactus');
    }
}
