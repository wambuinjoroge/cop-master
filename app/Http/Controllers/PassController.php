<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassController extends Controller
{
    public function index()
    {
    	return view('Pass.index');
    }

    //public function getCreate()
	//{
	//   return view('Pass.create');
	//}

	//public function postStore()
	//{
	//    return view('Pass.store')
	//}

}
