<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include('koneksi.php');
include('auth.php');

$username = $_SESSION['username'];

$query = "SELECT * FROM user where username = '$username'";
$result = $conn->query ($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    
    echo "<script type='text/javascript'>alert('PELERRR');</script>";
} else {
    echo "0 results";
}
$conn->close();

 ?>

	?>
</body>
</html>
