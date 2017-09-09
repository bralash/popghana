<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Transaction;

class AdminController extends Controller
{
    public function dashboard() {
    	$user = Auth::user();
    	
        if($user->status != 3) {
    		return redirect('/profile');
    	}
    	return View('admin.index');
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

    public function users() {
    	$users = User::all();
    	$user = Auth::user();
    	if($user->status != '3') {
    		return redirect('/profile');
    	}
    	return View('admin.users',compact('users'));
    }

    public function validateUser() {
        return View('admin.validate');
    }

    public function userValidate(Request $request) {
        $trans = new Transaction();
        $username = $request->input('username');
        $user = User::where('username', $username)->first();
        if($user != null) {
            $trans->username = $username;
            $trans->amount = $request->input('amount');
            $user->status = 1;
            $trans->save();
            $user->save();
            return redirect("admin/users");
        }
    }

    public function getUserById($code) {
        $user = User::where('user_code', $code)
        ->orWhere('user_code', 'like', '%' . $code. '%')->get();

        return $user;
    }


}
