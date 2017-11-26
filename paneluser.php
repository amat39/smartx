<?php  

                                        include("koneksi.php");
                                        $username = $_SESSION['username'];
                                        $sql = "SELECT * FROM `polis` WHERE uname='$username'";
                                        $result = $conn->query ($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {

                                                $id = $row["id"];
                                                $data = $row["KTP"];
                                                $jenis = $row["jenis"];
                                                $status = $row["status"];
                                                $slip = $row["slip_gaji"];
                                                $rek_tabungan = $row["rek_tabungan"];
                                                $rek_listrik = $row["rek_listrik"];
                                            }
                                            
                                        } else {
                                            echo "<h2> belum ada data pengajuan, silahkan ajukan  </h2>";
                                        }

?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Pengajuan</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Data</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                        <th>Slip Gaji</th>
                                        <th>Rek Tabungan</th>
                                        <th>Rek Listrik</th>
                                        <th></th>
                                        <th><a href="tambahtable.php"><h5>+ Pengajuan</h5></a></th>
                                    </thead>
                                    <tbody>
                                         <?php  
                                        $resultq = $conn->query ($sql);
                                            while($row = $resultq->fetch_assoc())
                                            {
                                                if($row['status']==0) {
                                                    $status = "Waiting";
                                                }
                                                elseif($row['status']==1) {
                                                    $status = "Accepted";
                                                }elseif ($row['status']==2) {
                                                    $status = "Rejected";
                                                }


                                                if ($row['jenis']==1) {
                                                    $jenis = "Kredit Tunai";
                                                }elseif ($row['jenis']==2) {
                                                    $jenis = "Kredit Kendaraan";
                                                }
                                                elseif ($row['jenis']==3) {
                                                    $jenis = "Kredit Usaha";
                                                }
                                                

                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td><a href='" . $row['KTP'] ."'>KTP</a></td>"; 
                                            echo "<td>" . $jenis . "</td>";
                                            echo "<td>" . $status . "</td>";
                                            echo "<td><a href='" . $row['slip_gaji'] ."'>Slip Gaji</a></td>"; 
                                            echo "<td><a href='" . $row['rek_tabungan'] ."'>Rekening Tabungan</a></td>"; 
                                            echo "<td><a href='" . $row['rek_listrik'] ."'>Rekening Listrik</a></td>"; 
                                            echo "<td><a href='delete.php?id=" . $row["id"] . "'><b>X</a></td>";
                                            echo "</tr>";
                                            }
                                            
                                           ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>