<?php

namespace Casulo\Fury;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FuryController extends Controller
{
    public function add($a, $b){
    	$result = $a + $b;
		return view('fury::add', compact('result'));
    }

    public function subtract($a, $b){
    	$result = $a - $b;
		return view('fury::add', compact('result'));
    }

}
