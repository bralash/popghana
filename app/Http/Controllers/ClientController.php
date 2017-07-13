<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{

    public function index() {
    	return View('coming-soon');
    }

    public function sendMail(Request $request) {
    	
    	Mail::raw('New Subscription', function($message) {
    		$from = request()->input('email-address');
    		$message->subject('New Subscription');
    		$message->from($from);
    		$message->to('info@popmoneymatrix.com');
    	});
    }
}
