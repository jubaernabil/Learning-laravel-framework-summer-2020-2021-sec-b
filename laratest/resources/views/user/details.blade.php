<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>User Details</h2>

	<form method="post">
	<table border="1">
	    <tr>
			<td>ID</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$user['email']}}</td>
		</tr>
		
	</table>
	</form>
</body>
</html>
