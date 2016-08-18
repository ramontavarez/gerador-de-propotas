<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function showPage($name = '') {
    	if ($name == '') {
    		return view('templates.index');
    	} else {
    		$view = 'templates.'.$name;
    		return view($view);
    	}

    }
}
