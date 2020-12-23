<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(Request $req){
            
       if($req->session()->has('userid')){

            return view('adminhome.index', ['userid'=> $req->session()->get('userid')]);

        
    }else{
         $req->session()->flash('msg', 'invalid request');
        return redirect('/login');
    }

    }

     function addemp(){
        return view('adminhome.addemp');
    }

    public function store(Request $request){

                 $emoloyee = new Employee();
                $emoloyee->ename= $request->ename;
                $emoloyee->cname= $request->cname;
                $emoloyee->phone= $request->phone;
                $emoloyee->username= $request->username;
                $emoloyee->password= $request->password;
                
                $emoloyee->save();

                

                 return redirect()->route('adminhome.index');

}

  function emplist(){
        return view('adminhome.emplist');

         $emoloyee = Employee::all();
        return view('adminhome.emplist')->with('emoloyees', $emoloyee);
    }


   
   
}
