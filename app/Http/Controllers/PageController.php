<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function showPage($name = '') {
    	if ($name == '') {
    		return view('blank');
    	} else {
    		$view = 'templates.'.$name;
    		return view($view);
    	}

    }
}
