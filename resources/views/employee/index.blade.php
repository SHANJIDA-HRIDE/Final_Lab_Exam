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
	<a href="{{ route('adminhome.addjob') }} ">Add Job </a> 
	

	
	
</body>
</html>