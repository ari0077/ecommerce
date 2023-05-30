<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);
}
