<?php
	 $chart = $_GET['id_chart'];
	 $koneksi = mysqli_connect("localhost","root","","cafe");
	 $data = mysqli_query($koneksi,"select * from chart where id_chart=$chart");
	 $cek = mysqli_fetch_array($data);
	 $data1 = $cek['jumlah'];
	 $data2 = $cek['harga'];
	 $qty =1 ;
	 $qtytot = $data1 - $qty;
	 $hrg = $data2 * $qtytot;
	 $cek3 = mysqli_query($koneksi,"update chart set jumlah='$qtytot', total='$hrg' where id_chart='$chart' ");
	 if ($cek3 >  0 ){
	 	header("location: keranjang.php");
	 }else{
	 	echo "gagal";
	 }
?>