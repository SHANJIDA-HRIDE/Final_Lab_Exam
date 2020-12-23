<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update job </title>
    

    <div class="list-group" align="center" >
    

<form method="post">
@csrf
<div class="row">
       
                            <div class="col-12">
                               
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                    


                                     
                                        
                                        
                                      


                                            <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">cpanyName</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="cname" value="{{$jobs[0]->cname}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Job</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="jtitle" value="{{$jobs[0]->jtitle}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">location</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="loc" value="{{$jobs[0]->loc}}">
                                                    
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">salary</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    <input type="text" name="sal" value="{{$jobs[0]->sal}}">
                                                    
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
