<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hello(){
    	echo "hello";
    }
    public function postForm(Request $request) {
    	// echo $request->input('name');
    	// echo $request->email;
    	// echo "string";
    	    	return $request->all();

    }
    public function handleRequest(Request $request){
    	return $request->only('name', 'email');
    }
}
