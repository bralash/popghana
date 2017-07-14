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
    	Mail::raw(request()->input('message'), function($message) {
    		$from = request()->input('email-address');
    		$name = request()->input('username');
    		$subject = request()->input('subject');
    		$userMessage = request()->input('message');

    		$message->from($from);
    		$message->subject($subject);
    		$message->to('info@popmoneymatrix.com')->cc('emmanuelasaber@gmail.com');
    	});
    }

}
