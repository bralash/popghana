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
    	$users = User::all();
        $activeUsers = User::where('status', '!=', 0)->get();
        if($user->status != 3) {
    		return redirect('/profile');
    	}
    	return View('admin.index', compact('users', 'activeUsers'));
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
    	$users = User::orderBy('created_at','desc')->get();
    	$user = Auth::user();
    	if($user->status != '3') {
    		return redirect('/profile');
    	}
    	return View('admin.users',compact('users'));
    }

    public function usersJSON() {
        $userCount = User::count();
        return $userCount;

        return \Response::json($userData);
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

    public function updateupliner(Request $request) {
        User::where('id', $request->input('id'))->update($request->except(['_token']));
        return redirect('/admin/users');
    }

    public function deleteUpliner($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users');
    }

}
