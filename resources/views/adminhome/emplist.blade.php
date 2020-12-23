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
	<table border="1">
		<tr>
			<td>Id</td>
			<td>name</td>
			<td>Company Name</td>
			<td>Phone</td>
			<td>Username</td>
			<td>PAssword</td>
		</tr>

		@for($i=0; $i < count($emoloyees); $i++)

			<tr>
				<td>{{$emoloyees[$i]['eid']}}</td>
				<td>{{$emoloyees[$i]['ename']}}</td>
				<td>{{$emoloyees[$i]['cname']}}</td>
				<td>{{$emoloyees[$i]['phone']}}</td>
				<td>{{$emoloyees[$i]['username']}}</td>
				<td>{{$emoloyees[$i]['password']}}</td>
				<td>
					
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>