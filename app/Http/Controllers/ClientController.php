<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input as input;
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

    public function generateRef() {
        $prefix = "";
        $characters = array_merge(range('0','9'));
        for($i = 0; $i < 8; $i++) {
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
        if(Auth::check()) {
            return redirect('/signin');
        }
        $users = User::all();
    	return View('client.signup', compact('users'));
    }

    public function refSignup($id) {
        $user = User::where('ref', $id)->first();
        if($user != null) {
            return View('client.refsignup', compact('user'));
        } else {
            return redirect("signup");
        }
    }

    public function register(Request $request) {
    	$user = new User();
    	$user_code = self::userCode();
        $ref = self::generateRef();
    	if($request->input('password') == $request->input('cpass')) {
    		try {
	    		$user->surname = $request->input('surname');
                $user->other_names = $request->input('other_names');
		    	$user->contact = $request->input('contact');
		    	$user->email = $request->input('email');
                $user->username = $request->input('username');
                $user->address = $request->input('address');
		    	$user->password = Hash::make($request->input('cpass'));
		    	$user->user_code = $user_code;
                $user->next_of_kin = $request->input('next_of_kin');
                $user->nok_contact = $request->input('nok_contact');
                $user->payment_method = $request->input('payment_method');
                $user->mm_number = $request->input('mm_number');
                $user->mm_name = $request->input('mm_name');
                $user->acc_name = $request->input('acc_name');
                $user->acc_number = $request->input('acc_number');
                $user->bank_name = $request->input('bank_name');
                $user->upliner_name = $request->input('upliner_name');
                $user->ref = $ref;
		    	$user->save();

		    	// EmailController::send_registration_mail($email,$username, $user_code);
		    	return redirect('signin');
    		} catch(QueryException $e) {
    			$error_code = $e->errorInfo[1];
    			if($error_code == 1062) {
    				return redirect('signup')->with('error','Username already exists');
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
    		'username' => $request->input('username'),
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
    	return redirect('/signin');
    }

    public function checkUplinerCount($username) {
        $user = User::where('username',$username)->first();
        if($user) {
            return count($user->getDownliners());
        }
        else {
            return false;
        }
    }


    public function profile() {
    	$user = Auth::user();
        $users = User::all();
        $us = Auth::user()->getDownliners();
        $uplinerCount = count($us);
        // echo "Count-".$uplinerCount;
        // die($us);
        $ref = self::generateRef();
    	return View('client.profile', compact('user', 'users', 'uplinerCount', 'ref','us'));
    }

    public function changePassword(Request $request) {
        $user = User::find(Auth::user()->id);
        if(Input::get('password') == Input::get('cpass')) {
            if(Hash::check(Input::get('current_password'), $user['password'])) {
                $user->password = bcrypt(Input::get('password'));
                $user->save();
                return back()->with('password_changed', 'Password Changed');
            } else {
                return back()->with('current_password', 'Current password does not match. Try again');
            }
        } else {
            return back()->with('new_password', 'New passwords do not match. Try again');
        }
    }

    Public function updateProfile(Request $request) {
        User::where('id', $request->input('id'))->update($request->except(['_token']));
        return redirect('profile');
    }
}

