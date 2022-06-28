<?php 
                        if(isset($_POST['simpan'])){
                                  $nama = $_POST['nama'];
                                  $nohp = $_POST['nohp'];
                                  $pesan = $_POST['pesan'];
                              
                                  header("location:https://api.whatsapp.com/send?phone=$nohp&text=Nama:%20$nama%20Pesan:%20$pesan");
                            } else {
                              echo "gagal";
                            }
                  ?> 