<?php
	include('koneksi.php');

	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "DELETE FROM data_posyandu
		WHERE id = $id
	");

	if($query)
	{
		echo "Data Berhasil Dihapus";
		echo "<meta http-equiv='refresh' content='2; url=data-posyandu.php'>";
	}
	else
	{
		echo "Data Gagal Terhapus";
		mysqli_error($koneksi);
	}
?>