<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

us
class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
    }
}
