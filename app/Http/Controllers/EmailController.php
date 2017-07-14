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

    		return redirect('email-confirm');
    	});
    }

    public function contact(Request $request) {
    	$userMessage = request()->input('message');
    	Mail::raw($userMessage, function($message) {
    		$subject = request()->input('subject');
    		$from = request()->input('email-address');
    		$name = request()->input('username');
    		$message->from($from, $name);
    		$message->to('info@popmoneymatrix.com', 'POP Money Matrix')->subject($subject);
    	});
    }

    public function confirm() {
    	return View('email.confirm');
    }

}
