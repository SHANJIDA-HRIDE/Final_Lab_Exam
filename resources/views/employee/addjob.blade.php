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
				<td>Company name</td>
				<td><input type="text" name="cname" ></td>
			</tr>
        
			<tr>
				<td>Job name</td>
				<td><input type="text" name="jtitle" ></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="loc" ></td>
			</tr>
            <tr>
				<td>salary</td>
				<td><input type="text" name="sal" ></td>
			</tr>
            
			<tr>
				<td><input type="submit" name="submit" value="Submit" ></td>
				<td></td>
			</tr>
		</table>
	</form>
	
</body>
</html>