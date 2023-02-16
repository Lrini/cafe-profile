<?php 
  $conn = new mysqli("localhost", "root", "", "cafe");
  $user = $_GET['id_user'];
  $menu = $_GET['id_menu'];
  $data = mysqli_query ($conn,"insert into chart (id_menu,id_user) values ('$menu','$user')");
  if ($data) {
          header("location: keranjang.php");
  } else {
    header("location: menu.php");
  }                        
?> 