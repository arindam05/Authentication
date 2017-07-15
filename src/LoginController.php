<?php

namespace WebArindam\Login;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function getLogin(){
  	$heading = 'Login Page1';
  	return view('login::login', compact('heading'));
  }
}
