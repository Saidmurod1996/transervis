<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}

    public function showLogin(){
    	return view('admin.login');
    }

    public function login(Request $request){

    	$this->validate($request, [
    		'name' => 'required|max:255',
    		'password' => 'required|min:6']);

    	if(Auth::guard('admin')->attempt(['name'=>$request->name,
    		'password'=>$request->password])){
    		return redirect()->intended(route('admin'));
    	}

        Session::flash('wrong', 'You entered wrong username or password!');
    	return redirect()->back();
    }
}
