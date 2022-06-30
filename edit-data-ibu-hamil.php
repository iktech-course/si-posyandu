<?php
	include('koneksi.php');
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nama_suami = $_POST['nama_suami'];
    $no_hp = $_POST['no_hp'];

	$query = mysqli_query($koneksi, "UPDATE data_ibu_hamil set nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', nama_suami='$nama_suami', no_hp='$no_hp' WHERE id ='$id'");

	if($query)
	{
		echo "Data Berhasil Diupdate";
		echo "<meta http-equiv='refresh' content='2; url=data-ibu-hamil.php'>";
	}
	else
	{
		echo "Data Gagal Terupdate";
	
	}
?>