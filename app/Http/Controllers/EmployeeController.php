<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;
use App\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
        function index(Request $req){

             if($req->session()->has('userid')){

            return view('employee.index', ['userid'=> $req->session()->get('userid')]);

        
    }else{
         $req->session()->flash('msg', 'invalid request');
        return redirect('/login');
    }
                
       
    }


     function addjob(){
        return view('employee.addjob');
    }
   public function store(Request $request){

                 $job = new Job();
                $job->cname= $request->cname;
                $job->jtitle= $request->jtitle;
                $job->loc= $request->loc;
                $job->sal= $request->sal;
              
                
                $job->save();

                

                 return redirect()->route('employee.index');

}


 function joblist(){
       

        



        $job = Job::all();
  return view('employee.joblist')->with('jobs', $job);



    }
}