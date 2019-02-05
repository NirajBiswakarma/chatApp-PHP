<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<div class="container-fluid">
<h1 id="indexh1">Welcome <?php echo $_POST['username']; ?></h1>
<h3 align="right"><?php echo $_SESSION['username']; ?><a href="logout.php">Logout</a></h3>
<br>
<br>	
<table style="width: 50%; color:#020f04;">
	<tr>
		<th>USERNAME</th>
		<th>STATUS</th>
		<th>ACTION</th>
	</tr>
	<tr>		
		<td>User1</td>
		<td>Online/Offline</td>
		<td><input class="chatbutton" type="submit" name="Chat" value="Start Chat"></td>
	</tr>
	<tr>		
		<td>User2</td>
		<td>Online/Offline</td>
		<td><input class="chatbutton" type="submit" name="Chat" value="Start Chat"></td>
	</tr>
</table>

</div>

</body>
</html>