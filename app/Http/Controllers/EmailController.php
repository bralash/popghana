<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
	public function comingSoon(Request $request) {
    	$messageBody = "A new user subscribed from the coming soon page";
    	Mail::raw($messageBody, function($message) {
    		$from = request()->input('email-address');
    		$message->subject('New Subscription');
    		$message->from($from, 'Subscription Form');
    		$message->to('info@popmoneymatrix.com');
    	});
    }

    public function contact(Request $request) {
    	$userMessage = request()->input('message');
    	Mail::raw($userMessage, function($message) {
    		$from = request()->input('email-address');
    		$name = request()->input('username');
    		$subject = request()->input('subject');

     		$message->from($from, $name);
    		$message->subject($subject);
    		$message->to('info@popmoneymatrix.com')->cc('emmanuelasaber@gmail.com');
    	});
    }

}
