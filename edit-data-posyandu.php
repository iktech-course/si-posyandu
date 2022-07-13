<?php
	include('koneksi.php');

    $tanggal = $_POST['tanggal'];
    $nama_bayi = $_POST['nama_bayi'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $jenis_vaksin = $_POST['jenis_vaksin'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE data_posyandu (id_bayi, bb, tb, jenis_vaksin, tgl, keterangan ) SET (
        '$nama_bayi','$bb','$tb','$jenis_vaksin', '$tanggal','$keterangan')";
     echo($sql . "<br>");
 
     $query = mysqli_query($koneksi, $sql);
	

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