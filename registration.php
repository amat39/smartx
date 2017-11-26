<!DOCTYPE html>
<html>
<head>
	<title>registration page smart x</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css"></style>
<body>

<script src="koneksi.php"></script>

	<div class="header">
		Registration Page
	</div>

	<div class="topnav" >
		
		  <a style="float: left;" href="homepage.php">Home</a>
		  <a style="float: left;" href="#">Products</a>
      <a href="login.php">Login</a>
		  <a href="#">Contacts</a>

	</div>

<div class="form">
  <form method="POST" action="regis.php">
    <label for="fname">username</label>
    <br>
    <input type="text"  name="username">
    <br>
    <label for="lname">Password</label><br>
    <input type="Password"  name="password">
    <br>
    <br>
    <label for="lname">E-mail</label><br>
    <input type="text"  name="email">
    <br>
    <br>
    <label for="lname">First Name</label><br>
    <input type="text" id="firstname" name="firstname" placeholder="Your Address..">
    <br>
    <br>
    <label for="lname">Last Name</label><br>
    <input type="text" id="lastname" name="lastname" placeholder="Your Address..">
    <br>
    <br>
    <label for="fname">Date of Birth</label><br>
    <input type="date" id="dateofbirth" name="dateofbirth" >
  <br>
    <br>
    <label for="lname">Address</label><br>
    <input type="text" id="lastname" name="address" placeholder="Your Address..">
    <br>
    <label for="country">Province</label><br>
    <select id="province" name="province">
      <option value="kaltim">Kalimantan Timur</option>
      <option value="kalteng">Kalimantan Tengah</option>
      <option value="kaltara">Kalimantan Utara</option>
    </select>
  <br>
    <input type="submit" value="Submit">
  </form>
</div>
<div class="bottom">
		Copyright &copy Sepupu_berXX_Team
	</div>
</body>
</html>