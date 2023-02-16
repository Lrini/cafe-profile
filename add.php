<?php
	$conn = new mysqli("localhost", "root", "", "cafe");
	$cart = $_GET['id_chart'];
	 $data = mysqli_query($conn,"select menu.harga, chart.jumlah from menu,chart where menu.id_menu = chart.id_chart and chart.id_menu=$cart");
	 $coba = mysqli_fetch_array($data);
	 $jmlh = $coba['jumlah'];
	 $total = $jmlh + 1;

	 $data2 = mysqli_query($conn,"update chart set jumlah = $total where id_chart=$cart");
	 if(data2){
	 	header("location:keranjang.php");
	 }else{
	 	echo "gagal";
	 }
?>