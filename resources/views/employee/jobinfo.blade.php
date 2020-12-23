<!DOCTYPE html>
<html lang="en">
  <head>
    <title>job INFO </title>
    
            <h2 class="mb-2"> job -- {{$jobs[0]->jtitle}} </h2>
        

    <div class="list-group" align="center" >
    


<div class="row">
@foreach($jobs as $job)
                            <div class="col-12">
                               
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">jobId</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{$jobs[0]->jid}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Company Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $jobs[0]->cname }}
                                            </div>
                                        </div>
                                        <hr />

                                         
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">job title</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $jobs[0]->jtitle }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">location</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $jobs[0]->loc }}
                                            </div>
                                        </div>
                                        <hr />
                                         <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">salary</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $jobs[0]->sal }}
                                            </div>
                                        </div>
                                        <hr />
                                       

                                       
                                        


                                       
                                    </div>
                                   
                                </div>
                            </div>
                            @endforeach
                        </div>


                    
    

   
   
    <div class="col-md-6">
      <a href="{{ route('job.edit', $jobs[0]->jid) }} " class="list-group-item list-group-item-action"><h4>Update</h4> </a>
      <a href="{{ route('job.delete', $jobs[0]->jid) }} " class="list-group-item list-group-item-action"><h4>Delete</h4> </a>
     
</div>
</div>
</div>


  </body>
  </html>