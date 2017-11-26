
<?php 
include('koneksi.php');
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $firstname = stripslashes($_REQUEST['firstname']);
  $lastname = stripslashes($_REQUEST['lastname']);
  $dateofbirth = $_REQUEST['dateofbirth'];
  $address = stripslashes($_REQUEST['address']);
  $email = stripslashes($_REQUEST['email']);
  $province = stripslashes($_REQUEST['province']);
  $username = mysqli_real_escape_string($conn,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn,$password);
  //Checking is user existing in the database or not
    $query = "INSERT INTO `user`(`username`, `password`, `email`, `firstname`, `lastname`, `dateofbirth`, `address`, `province`) VALUES ('$username','$password','$email', '$firstname','$lastname','$dateofbirth','$address','$province')";
  $result = mysqli_query($conn, $query);
        if($result){
      echo "registrasi berhasil";

      header("Location: homepage.php");
         }else{
          echo("COBA REGIS YANG BENER NGENTOD");
          mysqli_error($conn);
  }

}

 ?>