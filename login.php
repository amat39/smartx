<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body background="pic/untitled.png">

	<div class="header">
		Login Page
	</div>

	<div class="topnav" >
		
		  <a style="float: left;" href="homepage.php">Home</a>
		  <a style="float: left;" href="#">Products</a>
          <a href="registration.php">Reigstration</a>
		  <a href="#">Contacts</a>

	</div>

<?php
require('koneksi.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
	$result = mysqli_query($conn, $query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='registration.php'>Register</a> or <a href='login.php'>Login Page</a></div>";
	}
    }else{
    	?>
    	<div class="form">
    		<br><br><br><br>
			<form action="" method="post" name="login">
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="password" placeholder="Password" required /><br><br><br><br>
			<input name="submit" type="submit" value="Login" />
			</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
<br><br><br>
<div class="bottom">
		Copyright &copy Mr.Edy's
	</div>

   <?php } ?> 



</div>
</body>
</html>