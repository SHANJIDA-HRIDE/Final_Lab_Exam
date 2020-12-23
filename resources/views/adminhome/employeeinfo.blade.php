<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Employee INFO </title>
    
            <h2 class="mb-2"> Employee -- {{$users[0]->name}} </h2>
        

    <div class="list-group" align="center" >
    


<div class="row">
@foreach($users as $user)
                            <div class="col-12">
                               
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">UserId</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{$users[0]->userid}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->empname }}
                                            </div>
                                        </div>
                                        <hr />

                                         
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->username }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->password }}
                                            </div>
                                        </div>
                                        <hr />
                                         <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->phone }}
                                            </div>
                                        </div>
                                        <hr />
                                       

                                       
                                        


                                       
                                    </div>
                                   
                                </div>
                            </div>
                            @endforeach
                        </div>


                    
    

   
   
    <div class="col-md-6">
      <a href="{{ route('employee.edit', $users[0]->userid) }} " class="list-group-item list-group-item-action"><h4>Update</h4> </a>
     
</div>
</div>
</div>


  </body>
  </html>