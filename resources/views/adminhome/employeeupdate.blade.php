<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Employee </title>
    

    <div class="list-group" align="center" >
    

<form method="post">
@csrf
<div class="row">
       
                            <div class="col-12">
                               
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                    


                                     
                                        
                                        
                                      


                                            <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="empname" value="{{$users[0]->empname}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="username" value="{{$users[0]->username}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="password" value="{{$users[0]->password}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="phone" value="{{$users[0]->phone}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                     
                                       
                                        

                                        
                                       

                                       
                                          
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        
          
                        <div class="col-md-6">
                                <input type="submit" name="submit" value="Update">
                        </div>
                   
                    </div>

   
    
</div>
</form>


  </body>
  </html>
