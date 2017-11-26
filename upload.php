<?php 
include("koneksi.php");
include("auth.php");

if (isset($_POST['jenis'])){


 	 if ($_POST['jenis']=="1") {
                                             
 	 		$user = $_SESSION['username'];
			if(isset($_POST["jenis"]))
			{
				$errors = array();
				$uploadedFiles = array();
				$extension = array("jpeg","jpg","png","gif");
				$bytes = 1024;
				$KB = 1024;
				$totalBytes = $bytes * $KB;
				$UploadFolder = "UploadFolder/KTP";
				
				$counter = 0;
				
				foreach($_FILES["dokumen"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["dokumen"]["tmp_name"][$key];
					$name = $_FILES["dokumen"]["name"][$key];
					
					if(empty($temp))
					{
						break;
					}
					
					$counter++;
					$UploadOk = true;
					
					if($_FILES["dokumen"]["size"][$key] > $totalBytes)
					{
						$UploadOk = false;
						array_push($errors, $name." file size is larger than the 1 MB.");
					}
					
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					if(in_array($ext, $extension) == false){
						$UploadOk = false;
						array_push($errors, $name." is invalid file type.");
					}
					
					if(file_exists($UploadFolder."/KTP".$name) == true){
						$UploadOk = false;
						array_push($errors, $name." file is already exist.");
					}
					
					if($UploadOk == true){
						move_uploaded_file($temp,$UploadFolder."/KTP".$user."_".$name);
						array_push($uploadedFiles, $name);
						$titid = $UploadFolder."/KTP".$user."_".$name;
						$sql = "UPDATE `polis` SET `KTP`='$titid' WHERE uname='$user'";
						$result = mysqli_query($conn, $sql);
        						if($result){
      						header("Location: uploadktp.php");
         						}
					}
				}
				
				if($counter>0){
					if(count($errors)>0)
					{
						echo "<b>Errors:</b>";
						echo "<br/><ul>";
						foreach($errors as $error)
						{
							echo "<li>".$error."</li>";
						}
						echo "</ul><br/>";
					}
					
					if(count($uploadedFiles)>0){
						echo "<b>Uploaded Files:</b>";
						echo "<br/><ul>";
						foreach($uploadedFiles as $fileName)
						{
							echo "<li>".$fileName."</li>";
						}
						echo "</ul><br/>";
						
						echo count($uploadedFiles)." file(s) are successfully uploaded.";
					}								
				}
				else{
					echo "Please, Select file(s) to upload.";
				}
			}

      }



      elseif ($_POST['jenis']=="2") {
                                             
                                             
 	 		$user = $_SESSION['username'];
			if(isset($_POST["jenis"]))
			{
				$errors = array();
				$uploadedFiles = array();
				$extension = array("jpeg","jpg","png","gif");
				$bytes = 1024;
				$KB = 1024;
				$totalBytes = $bytes * $KB;
				$UploadFolder = "UploadFolder/slip";
				
				$counter = 0;
				
				foreach($_FILES["dokumen"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["dokumen"]["tmp_name"][$key];
					$name = $_FILES["dokumen"]["name"][$key];
					
					if(empty($temp))
					{
						break;
					}
					
					$counter++;
					$UploadOk = true;
					
					if($_FILES["dokumen"]["size"][$key] > $totalBytes)
					{
						$UploadOk = false;
						array_push($errors, $name." file size is larger than the 1 MB.");
					}
					
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					if(in_array($ext, $extension) == false){
						$UploadOk = false;
						array_push($errors, $name." is invalid file type.");
					}
					
					if(file_exists($UploadFolder."/slip".$name) == true){
						$UploadOk = false;
						array_push($errors, $name." file is already exist.");
					}
					
					if($UploadOk == true){
						move_uploaded_file($temp,$UploadFolder."/slip".$user."_".$name);
						array_push($uploadedFiles, $name);
						$titid = $UploadFolder."/slip".$user."_".$name;
						$sql = "UPDATE `polis` SET `slip_gaji`='$titid' WHERE uname='$user'";
						$result = mysqli_query($conn, $sql);
        						if($result){
      						header("Location: uploadktp.php");
         						}
					}
				}
				
				if($counter>0){
					if(count($errors)>0)
					{
						echo "<b>Errors:</b>";
						echo "<br/><ul>";
						foreach($errors as $error)
						{
							echo "<li>".$error."</li>";
						}
						echo "</ul><br/>";
					}
					
					if(count($uploadedFiles)>0){
						echo "<b>Uploaded Files:</b>";
						echo "<br/><ul>";
						foreach($uploadedFiles as $fileName)
						{
							echo "<li>".$fileName."</li>";
						}
						echo "</ul><br/>";
						
						echo count($uploadedFiles)." file(s) are successfully uploaded.";
					}								
				}
				else{
					echo "Please, Select file(s) to upload.";
				}
			}


      }

      elseif ($_POST['jenis']==3) {
                                             
      	$user = $_SESSION['username'];
			if(isset($_POST["jenis"]))
			{
				$errors = array();
				$uploadedFiles = array();
				$extension = array("jpeg","jpg","png","gif");
				$bytes = 1024;
				$KB = 1024;
				$totalBytes = $bytes * $KB;
				$UploadFolder = "UploadFolder/rektabungan";
				
				$counter = 0;
				
				foreach($_FILES["dokumen"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["dokumen"]["tmp_name"][$key];
					$name = $_FILES["dokumen"]["name"][$key];
					
					if(empty($temp))
					{
						break;
					}
					
					$counter++;
					$UploadOk = true;
					
					if($_FILES["dokumen"]["size"][$key] > $totalBytes)
					{
						$UploadOk = false;
						array_push($errors, $name." file size is larger than the 1 MB.");
					}
					
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					if(in_array($ext, $extension) == false){
						$UploadOk = false;
						array_push($errors, $name." is invalid file type.");
					}
					
					if(file_exists($UploadFolder."/rektabungan".$name) == true){
						$UploadOk = false;
						array_push($errors, $name." file is already exist.");
					}
					
					if($UploadOk == true){
						move_uploaded_file($temp,$UploadFolder."/rektabungan".$user."_".$name);
						array_push($uploadedFiles, $name);
						$titid = $UploadFolder."/rektabungan".$user."_".$name;
						$sql = "UPDATE `polis` SET `rek_tabungan`='$titid' WHERE uname='$user'";
						$result = mysqli_query($conn, $sql);
        						if($result){
      						header("Location: uploadktp.php");
         						}
					}
				}
				
				if($counter>0){
					if(count($errors)>0)
					{
						echo "<b>Errors:</b>";
						echo "<br/><ul>";
						foreach($errors as $error)
						{
							echo "<li>".$error."</li>";
						}
						echo "</ul><br/>";
					}
					
					if(count($uploadedFiles)>0){
						echo "<b>Uploaded Files:</b>";
						echo "<br/><ul>";
						foreach($uploadedFiles as $fileName)
						{
							echo "<li>".$fileName."</li>";
						}
						echo "</ul><br/>";
						
						echo count($uploadedFiles)." file(s) are successfully uploaded.";
					}								
				}
				else{
					echo "Please, Select file(s) to upload.";
				}
			}

      }

      elseif ($_POST['jenis']==4) {

             	$user = $_SESSION['username'];
			if(isset($_POST["jenis"]))
			{
				$errors = array();
				$uploadedFiles = array();
				$extension = array("jpeg","jpg","png","gif");
				$bytes = 1024;
				$KB = 1024;
				$totalBytes = $bytes * $KB;
				$UploadFolder = "UploadFolder/reklistrik";
				
				$counter = 0;
				
				foreach($_FILES["dokumen"]["tmp_name"] as $key=>$tmp_name){
					$temp = $_FILES["dokumen"]["tmp_name"][$key];
					$name = $_FILES["dokumen"]["name"][$key];
					
					if(empty($temp))
					{
						break;
					}
					
					$counter++;
					$UploadOk = true;
					
					if($_FILES["dokumen"]["size"][$key] > $totalBytes)
					{
						$UploadOk = false;
						array_push($errors, $name." file size is larger than the 1 MB.");
					}
					
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					if(in_array($ext, $extension) == false){
						$UploadOk = false;
						array_push($errors, $name." is invalid file type.");
					}
					
					if(file_exists($UploadFolder."/reklistrik".$name) == true){
						$UploadOk = false;
						array_push($errors, $name." file is already exist.");
					}
					
					if($UploadOk == true){
						move_uploaded_file($temp,$UploadFolder."/reklistrik".$user."_".$name);
						array_push($uploadedFiles, $name);
						$titid = $UploadFolder."/reklistrik".$user."_".$name;
						$sql = "UPDATE `polis` SET `rek_listrik`='$titid' WHERE uname='$user'";
						$result = mysqli_query($conn, $sql);
        						if($result){
      						header("Location: uploadktp.php");
         						}
					}
				}
				
				if($counter>0){
					if(count($errors)>0)
					{
						echo "<b>Errors:</b>";
						echo "<br/><ul>";
						foreach($errors as $error)
						{
							echo "<li>".$error."</li>";
						}
						echo "</ul><br/>";
					}
					
					if(count($uploadedFiles)>0){
						echo "<b>Uploaded Files:</b>";
						echo "<br/><ul>";
						foreach($uploadedFiles as $fileName)
						{
							echo "<li>".$fileName."</li>";
						}
						echo "</ul><br/>";
						
						echo count($uploadedFiles)." file(s) are successfully uploaded.";
					}								
				}
				else{
					echo "Please, Select file(s) to upload.";
				}
			}                                    


      }

 }
?>