<?php
	$kon = mysqli_connect("localhost","root","","cafe");
	function query($query){
		global $kon;
		$result = mysqli_query($kon,$query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	function gambar (){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tipe = $_FILES['gambar']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}
		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($eks);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, 'menu/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;
	}
//function untuk insert

	function tambahmenu($data){
		global $kon;
		$menu = $_POST['menu'];
		$harga = $_POST['harga'];
		$foto = gambar();
		if (!$foto) {
			return false;
		}


		 $sql = mysqli_query($kon,"insert into menu (menu,harga,gambar) values ('$menu','$harga','$foto')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahcatering($data){
		global $kon;
		$nama = $_POST['nama_paket'];
		$isi =$_POST['isi'];
		$harga = $_POST['harga'];

		 $sql = mysqli_query($kon,"insert into catering (nama_paket,isi,harga) values ('$nama','$isi','$harga')");
		 return mysqli_affected_rows($kon);
	
	}

	function bayarawal ($data){
	global $kon;
	$nis = $_POST['nis'];
	$bulan = $_POST['bulan'];
	$jth_tempo = $_POST['jth_tempo'];
	$tgl_bayar =$_POST['tgl_bayar'];
	$no_bayar = $_POST['no_bayar'];
	$jumlah =$_POST['jumlah'];
	$keterangan = $_POST['keterangan'];

	$startdate3=strtotime("December 2021");
	// echo $startdateTahunAjaran;
	$startdate2 = strtotime("<?php $jth_tempo;?>");
	for($i=0; $i < 12; $i++) {
		$bulanSpp = date('F Y', strtotime("+$i month", $startdate3));
		$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($tempo)));
		// echo date('F Y', $bulanSpp);
		$sql = mysqli_query($kon,"insert into spp (nis,bulan,jth_tempo,tgl_bayar,no_bayar,jmlh,keterangan) value ('$nis','$bulanSpp','$jatuh_tempo','$tgl_bayar','$no_bayar','$jumlah','$keterangan')");
	return mysqli_affected_rows($kon);
	}
	}
	
	function tambahgaleri($data){
		global $kon;
		$nama = $_POST['nama_foto'];
		$foto = foto();
		if(!$foto){
			return false;
		}
		 $sql = mysqli_query($kon,"insert into galeri (nama_foto,foto) values ('$nama','$foto')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahakun($data){
		global $kon;
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$nis = $_POST['nis'];
		$nip = $_POST['nip'];
		$ket = $_POST['ket'];

		

		$sql = mysqli_query($kon,"insert into login (user,pass,nim,nip,ket) values ('$user','$pass','$nis','$nip','$ket')");
		return mysqli_affected_rows($kon);
	}

//function untuk edit
	function editguru($data){
		global $kon;
		$nip =$_POST['nip'];
		$nama_guru = $_POST['nama'];
		$foto = gambar();
		if (!$foto) {
			return false;
		}
		 $sql = mysqli_query($kon,"update guru set nama_guru='$nama_guru',foto='$foto' where nip='$nip'");
		 return mysqli_affected_rows($kon);
	
	}

	function editsiswa($data){
		global $kon;
		$nis =$_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$ajaran = $_POST['ajaran'];
		$biaya = $_POST['biaya'];
		$foto = foto();
		if(!$foto){
			return false;
		}

		 $sql = mysqli_query($kon,"update siswa set nama='$nama',kelas='$kelas',th_ajaran='$ajaran',biaya='$biaya', foto='$foto' where nis='$nis'");
		
		 return mysqli_affected_rows($kon);
	
	}

	
//function untuk hapus
	function hapusguru($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM guru where nip=$id");
		return mysqli_affected_rows($kon);
	}

	function hapussiswa($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM siswa where nis=$id");
		return mysqli_affected_rows($kon);
	}

	function hapuspinjam($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM pinjaman where id_pinjam=$id");
		return mysqli_affected_rows($kon);
	}

	function hapusgaleri($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM galeri where id=$id");
		return mysqli_affected_rows($kon);
	}

	function hapusakun($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM login where id=$id");
		return mysqli_affected_rows($kon);
	}

?>