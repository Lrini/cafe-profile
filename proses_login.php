<?php
        include("koneksi.php");
        $koneksi = mysqli_connect("localhost","root","","cafe");
        if(isset($_POST['login'])){
            $username=$_POST['user'];
            $pass=$_POST['pass'];
            $data = mysqli_query($koneksi,"select * from user where user = '$username' and pass='$pass'");
            $cek = mysqli_num_rows($data);
            $data2 = mysqli_fetch_array($data);

            if($cek > 0){
                session_start();
                $_SESSION['id_user'] = $data2['id_user'];
                header("location:index.php");
            }else{
                header("location:login.php?pesan=gagal");
            }
        }
        ?>