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

                 $user = new User();
                $user->empname= $request->empname;
                $user->cname= $request->cname;
                $user->phone= $request->phone;
                $user->username= $request->username;
                $user->password= $request->password;
                 $user->type = $request->radio;
                
                $user->save();

                

                 return redirect()->route('adminhome.index');

}

  function emplist(){
       

        

        $user = User::where('type', '2')
                    ->get();
        return view('adminhome.emplist')->with('users', $user);



    }

      function employeeinfo($id){
      $user = User::where('userid', $id)
                    ->get();
        
       
                   
        return view('adminhome.employeeinfo')->with('users', $user);

    
    }

    function employeeedit($id)
    {
        $user = User::where('userid', $id)
        ->get();
       
    return view('adminhome.employeeupdate')->with('users', $user);
    }

    function employeeupdate(Request $request, $id)
    {

    $request->validate([
      'empname'=>'required',
     'username'=>'required',
      'password'=>'required',
      'phone'=>'required'
      
    
        ]);
        
   User::where('userid', $id)->update(['empname' => $request->empname,
    'username' => $request->username,
    'password' => $request->password,
    'phone' => $request->phone
    
  ]);

        return redirect()->route('adminhome.empinfo', $id);

  
  }

   function employeedelete($id)
  {
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('userid', $id )->delete();
            return redirect()->route('adminhome.emplist');
        }else{
            return redirect()->route('adminhome.emplist',$id);
        }
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('user')
        ->where('username', 'LIKE', "%{$query}%")
        ->where('type' , 2)
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
        $url = route('adminhome.empinfo', $row->uid);
       $output .= '
       <li><a href="'.$url.'">'.$row->username.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }




}

   
   
}
