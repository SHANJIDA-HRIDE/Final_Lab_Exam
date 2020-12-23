<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurant;
use App\food;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
        function index(Request $req){

             if($req->session()->has('userid')){

            return view('member.index', ['userid'=> $req->session()->get('userid')]);

        
    }else{
         $req->session()->flash('msg', 'invalid request');
        return redirect('/login');
    }
                
       
    }
   
}