<?php
    include('koneksi.php');

    $nama_bayi = $_POST['nama_bayi'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $jenis_vaksin = $_POST['jenis_vaksin'];
    $tgl = $_POST['tgl'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($koneksi, "INSERT INTO data_posyandu (nama_bayi, bb, tb, jenis_vaksin, tgl, keterangan ) VALUES (
        '$nama_bayi','$bb','$tb','$jenis_vaksin','$tgl','keterangan')");

    
    if($query)
    {
        echo "Data Berhasil Disimpan";
        echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
    }
    else
    {
        echo "Data Gagal Tersimpan";
        
    }
?>