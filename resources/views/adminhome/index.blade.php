<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('username') }}</h1>
	<br>
	<a href="/logout">logout</a><br>
	<br>
	<a href="{{ route('adminhome.addemployee') }} ">Add Employee </a> 
	<a href="{{ route('adminhome.emplist') }} ">Employee List </a> 
	
	
</body>
</html>