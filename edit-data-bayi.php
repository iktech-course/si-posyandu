<?php
	include('koneksi.php');

    $nama_bayi = $_POST['nama_bayi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $bb_lahir = $_POST['bb_lahir'];
    $tb_lahir = $_POST['tb_lahir'];
    $nama_ortu = $_POST['nama_ortu'];

    $query = mysqli_query($koneksi, "UPDATE data_bayi (nama_bayi, jenis_kelamin, tgl_lahir, bb_lahir, tb_lahir, nama_ortu ) VALUES (
        '$nama_bayi','$jenis_kelamin','$tanggal_lahir','$bb_lahir','$tb_lahir','$nama_ortu')");
	");

	if($query)
	{
		echo "Data Berhasil Diupdate";
		echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
	}
	else
	{
		echo "Data Gagal Terupdate";
		mysqli_error($query);
	}
?>