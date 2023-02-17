<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login_wibsiteController extends Controller
{
    //
    public function login(request $request)
    {
       $request->validate([
'username'=>'required',
'password'=>'required'
       ]);
    }
}
