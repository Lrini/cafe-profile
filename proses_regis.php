<?php
        include("koneksi.php");
        $koneksi = mysqli_connect("localhost","root","","cafe");
        if(isset($_POST['daftar'])){
            $username=$_POST['user'];
            $pass=$_POST['pass'];
            $nama = $_POST['nama'];
            $hp = $_POST['hp'];
            $data = mysqli_query($koneksi,"insert into user (nama,hp,user,pass) values ('$nama','$hp','$username','$pass')");

            if($data){
                header("location:login.php");
            }else{
                header("location:register.php?pesan=gagal");
            }
        }
        ?>