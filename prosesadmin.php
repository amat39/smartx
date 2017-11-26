<?php  

                                        include("koneksi.php");
                                        $username = $_SESSION['username'];
                                        $sql = "SELECT * FROM `polis` ";
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