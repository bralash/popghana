<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\EmailController;
use Hash;
use App\User;

class ClientController extends Controller
{

	public static function generateCode() {
		$prefix = 'POP';
		$characters = array_merge(range('A','Z'), range('0','9'));
		for($i = 0; $i < 6; $i++) {
			$rand = mt_rand(0, count($characters)-1);
			$prefix .= $characters[$rand];
		}

		return $prefix;
	}

	public static function userCode() {
		$code = self::generateCode();
		$user = User::where('user_code', '=', $code)->get();
		if($user) {
			$code = self::generateCode();
		}

		return $code;
	}

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

    public function register(Request $request) {
    	$user = new User();
    	$user_code = self::userCode();
    	if($request->input('password') == $request->input('cpass')) {
    		try {
    			$email = $request->input('email');
    			$username = $request->input('name');
	    		$user->name = $username;
		    	$user->contact = $request->input('contact');
		    	$user->email = $email;
		    	$user->password = Hash::make($request->input('cpass'));
		    	$user->user_code = $user_code;
		    	$user->save();

		    	// EmailController::send_registration_mail($email,$username, $user_code);
		    	return redirect('home');
    		} catch(QueryException $e) {
    			$error_code = $e->errorInfo[1];
    			if($error_code == 1062) {
    				return redirect('signup')->with('error','Email already exists');
    			}
    		}
    	} else {
    		return redirect('signup')->with('password_error',['Passwords do not match. Please try again']);
    	}
    	
    }

    public function signin() {
    	return View('client.signin');
    }

    public function login(Request $request) {
    	$userData = array(
    		'contact' => $request->input('contact'),
    		'password' => $request->input('password')
    	);

    	if(Auth::attempt($userData)) {
    		return redirect('profile');
    	} else {
    		return redirect('signin')->with('error', 'Invalide credentials. Try again');
    	}
    }

    public function logout(Request $request) {
    	Auth::logout();
    	Session::flush();
    	return redirect('home');
    }

    public function profile() {
    	return View('client.profile');
    }
}

