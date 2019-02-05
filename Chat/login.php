<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<h1 id="loginh1"><?php echo "Chat Application"; ?></h1>
<div class="container-fluid">
	

<div class="container">
<form action="index.php" method="post" autocomplete="off">
  <fieldset>
    <legend>Already  a User??Login Details :</legend>
    <label>Username :</label>
    <input class="input" type="text" name="username" placeholder="Enter username">
		    <br>
		    <br>
    <label>Password :</label>
    <input class="input" type="password" name="userpass" placeholder="Enter password">
    <br>
    <br>
    <input type="submit" value="Login">
  </fieldset>
</form>
			<br>
			<br>
			<br>
<form action="newuser.php" method="post" autocomplete="off">
  <fieldset>
    <legend>New Register:-</legend>
    <label>Username :</label>
    <input class="input" type="text" name="createusername" placeholder="Create username" >
		    <br>
		    <br>
    <label>Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="input" type="Email" name="email" placeholder="Enter your e-mail">
		    <br>
		    <br>
    <label>Password :</label>
    <input class="input" type="password" name="createpass" placeholder="Create your password">
		    <br>
		    <br>
    <input type="submit" value="Register">
  </fieldset>
</form>

</div>

</div>
<script>
//$.ajax()

</script>
	
</body>
</html>