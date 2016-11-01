<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function autenticar(Request $request) {
    	if (auth()->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {

    		return redirect()->route('page', ['index']);
    	}
    	
    }
}
