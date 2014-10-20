<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name = "show" action="newuser" method="post">
<table border="1">
		<tr>
			<td>User Name </td>
			<td>First Name</td>
			<td>Last Name</td>
		</tr>
	
	
		
		@foreach ($users as $user) 
		   <tr>
		   <td>{{$user->Fname}}</td>
		   <td>{{$user->Lname}}</td>
		   <td>{{$user->username}}</td>
		   </tr>

		 @endforeach 
		
		

</table>
<input type = "submit" value = "Submit">
</form>
</body>
</html>