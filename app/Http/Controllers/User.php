<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');

    }

    public function forgot()
    {
        return view('forgot');
    }


}
