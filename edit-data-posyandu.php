<?php
	include('koneksi.php');

    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama_bayi = $_POST['nama_bayi'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $jenis_vaksin = $_POST['jenis_vaksin'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE data_posyandu set tgl='$tanggal', id_bayi='$nama_bayi', bb='$bb', tb='$tb', jenis_vaksin='$jenis_vaksin', keterangan='$keterangan' WHERE id ='$id'";
	$query = mysqli_query($koneksi, $sql);
	

	if($query)
	{
		echo "Data Berhasil Diupdate";
		echo "<meta http-equiv='refresh' content='2; url=data-posyandu.php'>";
	}
	else
	{
		echo "Data Gagal Terupdate \n";
        mysqli_error($koneksi);
		
	}
?>