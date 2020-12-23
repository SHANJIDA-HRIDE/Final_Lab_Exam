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
	<div class="list-group" align="center" >
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
    @foreach($users as $user)
  <a href="{{ route('adminhome.empinfo', $user->userid) }}" class="list-group-item list-group-item-action"><h4>{{$user->username}}</h4> <br> </a>
 @endforeach
</div>
</div>


</body>
</html>