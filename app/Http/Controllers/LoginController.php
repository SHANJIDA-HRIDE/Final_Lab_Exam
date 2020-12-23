<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Validator;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		
		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->get();

		

		if($user[0]->type == 1){
			$request->session()->put('username', $request->input('username'));
			$request->session()->put('userid', $user[0]->userid);
			

			return redirect()->route('adminhome.index');
		}elseif($user[0]->type == 2){
				$request->session()->put('username', $request->input('username'));
				$request->session()->put('userid', $user[0]->userid);
				
	
				return redirect()->route('employee.index');
		}
		 else{

            $request->session()->flash('msg', 'invalid username/password');
            
            
            return redirect('/login');

        }
		
	}
}


