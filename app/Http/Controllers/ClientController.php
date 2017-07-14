<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{

    public function index() {
    	return View('coming-soon');
    }

    

    public function home() {
    	return View('client.index');
    }

    public function contact() {
    	return view('client.contact');
    }

    public function signup() {
    	return View('client.signup');
    }
}
