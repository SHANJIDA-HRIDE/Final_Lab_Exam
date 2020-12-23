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



     function jobinfo($id){
      $job = Job::where('jid', $id)
                    ->get();
        
       
                   
        return view('employee.jobinfo')->with('jobs', $job);

    
    }



     function employeeedit($id)
    {
        $job = Job::where('jid', $id)
        ->get();
       
    return view('employee.jobupdate')->with('jobs', $job);
    }

    function employeeupdate(Request $request, $id)
    {

    $request->validate([
      'cname'=>'required',
     'jtitle'=>'required',
      'loc'=>'required',
      'sal'=>'required'
      
    
        ]);
        
   Job::where('jid', $id)->update(['cname' => $request->cname,
    'jtitle' => $request->jtitle,
    'loc' => $request->loc,
    'sal' => $request->sal
    
  ]);

        return redirect()->route('adminhome.jobinfo', $id);

  
  }

    function employeedelete($id)
  {
         $job = Job::find($id);

        if($job->delete()){
            $deletedRows = $user::where('jid', $id )->delete();
            return redirect()->route('employee.joblist');
        }else{
            return redirect()->route('employee.joblist',$id);
        }
    }

}