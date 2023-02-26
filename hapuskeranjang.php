<?php
$cart = $_GET['id_chart'];
$koneksi = mysqli_connect("localhost","root","","cafe");
$hapus = mysqli_query($koneksi,"delete from chart where id_chart=$cart");
if($hapus){
    header("location: keranjang.php");
}else{
    echo"gagal";
}
?>