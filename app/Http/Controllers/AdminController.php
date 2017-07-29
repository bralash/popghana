<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AdminController extends Controller
{
    public function dashboard() {
    	$user = Auth::user();
    	
        if($user->status !== 3) {
    		return redirect('/profile');
    	}
    	return View('admin.index');
    }

    public function users() {
    	$users = User::all();
    	$user = Auth::user();
    	if($user->status !== '3') {
    		return redirect('/profile');
    	}
    	return View('admin.users',compact('users'));
    }
}
