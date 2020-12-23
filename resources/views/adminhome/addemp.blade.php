<!DOCTYPE html>
<html>
<head>
	<title>ADD page</title>
</head>
<body>
	<h1>ADD Employee</h1>

	<form method="post" >
    @csrf
		<table>
			<tr>
				<td>Employee name</td>
				<td><input type="text" name="ename" ></td>
			</tr>
        
			<tr>
				<td>Company name</td>
				<td><input type="text" name="cname" ></td>
			</tr>
			<tr>
				<td>Phone No</td>
				<td><input type="text" name="phone" ></td>
			</tr>
            <tr>
				<td>User Name</td>
				<td><input type="text" name="username" ></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input type="text" name="password" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit" ></td>
				<td></td>
			</tr>
		</table>
	</form>
	
</body>
</html>