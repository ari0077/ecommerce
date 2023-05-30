<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App
class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
    }
}
