<?php

namespace Hyt\Http\Controllers;

use Illuminate\Http\Request;

use Hyt\Http\Requests;
use Hyt\Http\Controllers\Controller;

class AlmacenController extends Controller
{
    public function create(){
    	return view('almacen.create');
    }
}
