<!DOCTYPE html>
<html>
<head>
	<title>verif</title>
</head>
<body>
<?php 


include("koneksi.php");
if (isset($_GET['id'])) {
    // $id = $_GET(['id']);
    $anu = $_GET['id'];
}

$query ="SELECT NIK FROM polis WHERE id='$anu'";
$result = $conn->query ($query);

			if ($result->num_rows > 0) {
                                            // output data of each row
				while($row = $result->fetch_assoc()) {

			        $NIK = $row["NIK"];
			        $sql = "SELECT NIK FROM verif WHERE NIK='$NIK'";
			        $hasil = $conn->query($sql);
			        if ($hasil->num_rows>0) {
			        	$verified = "UPDATE polis SET status='1' WHERE id='$anu'";
			        	echo "data terverifikasi, kembali ke <a href='table.php'>DATA</a>";
			        	}
			        }			                                                              
            } else {
                                            echo "data tidak valid!";
                                            echo "";
                                        }

 ?>
</body>
</html>