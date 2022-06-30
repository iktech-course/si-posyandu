<?php
	include('koneksi.php');

	$id = $_POST['id'];
    $nama_bayi = $_POST['nama_bayi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $bb_lahir = $_POST['bb_lahir'];
    $tb_lahir = $_POST['tb_lahir'];
    $nama_ortu = $_POST['nama_ortu'];

    $query = mysqli_query($koneksi, "UPDATE data_bayi set nama_bayi='$nama_bayi', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', bb_lahir='$bb_lahir', tb_lahir='$tb_lahir', nama_ortu='$nama_ortu' WHERE id ='$id'");
	

	if($query)
	{
		echo "Data Berhasil Diupdate";
		echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
	}
	else
	{
		echo "Data Gagal Terupdate";
		
	}
?>