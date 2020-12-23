<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>EMP List</h1>

	<a href="{{route('adminhome.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" action="../admin/employee" class="search-location mt-md-5">
          <div class="row justify-content-center">
            <div class="col-lg-10 align-items-end">
            <div class="form-group">
              <div class="active-purple-3 active-purple-4 mb-4">
                <input type="text" class="form-control form-control-sm ml-3 w-75" placeholder="Search Employee" name="search" id="search">
                <div id="searchlist"> </div>
              </div>
              @csrf
            </div>
            </div>
          </div>
        </form>
	<div class="list-group" align="center" >
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
    @foreach($users as $user)
  <a href="{{ route('adminhome.empinfo', $user->userid) }}" class="list-group-item list-group-item-action"><h4>{{$user->username}}</h4> <br> </a>
 @endforeach
</div>
</div>


</body>
</html>

 <script>
$(document).ready(function(){

 $('#search').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[username="_token"]').val();
         $.ajax({
          url:"{{ route('employee.search') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#searchlist').fadeIn();  
                    $('#searchlist').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#search').val($(this).text());  
        $('#searchlist').fadeOut();  
    });  

});
</script>
