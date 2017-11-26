<?php 

include("auth.php");

 ?>

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<?php 
include("sidebar.php");
 ?>

    <div class="main-panel">
		<?php 
include("topnavbar.php");
 ?>

    <?php  

     include("koneksi.php");
     $username = $_SESSION['username'];
    ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Form Pengajuan Kredit</h4>
                            </div>
                                <div align="center" class="form" enctype="multipart/form-data">
                                    <form method="POST" action="prosestambahtable.php">
                                        <h3>Jenis kredit</h3>
                                        <select name="jenis">
                                            <option value="1">Kredit Tunai</option>
                                            <option value="2">Kredit Kendaraan</option>
                                            <option value="3">Kredit Usaha</option>
                                        </select><br>
                                        <h3>Nomor Induk Kependudukan</h3>
                                        <input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" type="text" name="NIK" id="myinput">
                                        <!-- <h3>Fotocopy/Scan Kartu Tanda Penduduk</h3>
                                        
                                          <input type="file" name="KTP" ><br> -->
                                       
                                        <!-- <h3>Fotocopy/Scan Slip Gaji/SKP</h3>
                                        
                                        <input type="file" name="slip_gaji" > -->
                                        
                                        <br>
                                        <h3>Nomor Rekening</h3>
                                        <input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" type="text" name="NOREK" id="myinput">
                                        <!-- <h3>Fotocopy/Scan Rek Tabungan</h3>
                                    
                                        <input type="file" name="slip_gaji" ><br>
                                        
                                        <h3>Fotocopy/Scan Rek Listrik</h3>
                                       
                                        <input type="file" name="slip_gaji" ><br> -->
                                        <br><br>
                                        
                                        <input type="submit" name="" value="Ajukan">
                                    </form>
                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="index.php">mr.edy</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
