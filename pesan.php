<?php 
  $conn = new mysqli("localhost", "root", "", "cafe");
  $user = $_GET['id_user'];
  $menu = $_GET['id_menu'];
  $harga = $_GET['harga'];
  $total = $_GET['harga'];
  $jmlh = 1;
  $data = mysqli_query ($conn,"insert into chart (id_menu,id_user,jumlah,harga,total) values ('$menu','$user','$jmlh','$harga','$total')");
  if ($data) {
          header("location: keranjang.php");
  } else {
    header("location: menu.php");
  }                        
?> 