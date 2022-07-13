<?php
	include('koneksi.php');

    $tanggal = $_POST['tanggal'];
    $nama_bayi = $_POST['nama_bayi'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $jenis_vaksin = $_POST['jenis_vaksin'];
    $keterangan = $_POST['keterangan'];

	$query = mysqli_query($koneksi, "UPDATE data_posyandu set tanggal='$tanggal', nama_bayi='$nama_bayi', bb='$bb', tb='$tb', jenis_vaksin='$jenis_vaksin', keterangan='$keterangan' WHERE id ='$id'");
	

	if($query)
	{
		echo "Data Berhasil Diupdate";
		echo "<meta http-equiv='refresh' content='2; url=data-posyandu.php'>";
	}
	else
	{
		echo "Data Gagal Terupdate";
		
	}
?>