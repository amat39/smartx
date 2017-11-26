<?php 
include('koneksi.php');
include('auth.php');

$uname = $_SESSION['username'];
$sql = "SELECT FROM 'user' where username='$uname'";
$now = date("yhsec");

if (isset($_POST['jenis'])){
        // removes backslashes
  $jenis = $_POST['jenis'];
        //escapes special characters in a string
  $NIK = $_POST['NIK'];
  $NOREK = $_POST['NOREK'];

  //Checking is user existing in the database or not
    $query = "INSERT INTO `polis`(`id`, `jenis`, `status`, `NIK`, `KTP`, `slip_gaji`, `NOREK`, `rek_tabungan`, `rek_listrik`, `uname`) VALUES ('$now','$jenis','','$NIK','','','$NOREK','','','$uname')";
  $result = mysqli_query($conn, $query);
        if($result){
      echo "registrasi berhasil";

      header("Location: uploadktp.php");
         }else{
          echo("Silahkan periksa kembali dokumen anda");
          die('Could not connect: ' . mysqli_error($conn));
        }
mysqli_close($conn);
}

 ?>