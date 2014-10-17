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
		<?php 
		//$users = new User;
		//$users = User::all();
		
		foreach ($users as $user) {
		   $fname = $user->Fname;
		   $lname = $user->Lname;
		   $uname = $user->username;
		   
	
		   echo "<tr>";
		   echo "<td>".$uname."</td>";
		   echo "<td>".$lname."</td>";
		   echo "<td>".$fname."</td>";
		   echo "</tr>";
		 
		}
		?>

</table>
<input type = "submit" value = "Submit">
</form>
</body>
</html>