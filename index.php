<?php 
include("auth.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage smart x</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css"></style>
<body background="pic/untitled.png">
	<div class="header">
		Home Page
	</div>

	<div class="topnav" >
		
		  <a style="float: left;" href="index.php">Home</a>
		  <a style="float: left;" href="#">Products</a>
      
      <a href="user.php">Welcome <?php echo $_SESSION['username'];?></a>
      <a href="logout.php">Logout</a>
		  <a href="#">Contacts</a>

	</div>

<div class="contents">
  


 <?php 
include("slideshow.php");
  ?>


  <h3>NGENTOD</h3>
  <p>ngentod itu enak, apalagi nopal suka di perkosa buritnya sama om om berbulu,
   <br> kalo minat hubungi naufal saputra nim 223 <= pecinta om om kekar berbulu
  </p>

</div>

<script src="slideshowscript.min.js"></script>

<div class="bottom">
		Copyright &copy Sepupu_berXX_Team
	</div>
</body>
</html>