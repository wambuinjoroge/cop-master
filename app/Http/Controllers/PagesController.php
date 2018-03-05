<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
    	return view('welcome');
    }

    public function addusers () {
    	return view('pages.addusers');
    }

    public function member() {
    	return view('member.panel');
    }

    public function faq() {
    	return view('faq');
    }

    public function help() {
    	return view('help');
    }

    public function finance() {
    	return view('finance.agent.panel');
    }

    public function agent() {
    	return view('agent.panel');
    }
}
