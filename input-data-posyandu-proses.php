<?php
    include('koneksi.php');

    $tanggal = $_POST['tanggal'];
    $nama_bayi = $_POST['nama_bayi'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $jenis_vaksin = $_POST['jenis_vaksin'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($koneksi, "INSERT INTO data_posyandu (tanggal, nama_bayi, bb, tb, jenis_vaksin, keterangan ) VALUES (
        '$tanggal','$nama_bayi','$bb','$tb','$jenis_vaksin,'$keterangan')");

    // echo("INSERT INTO data_ibu_hamil (nama, tgl_lahir, alamat, nama_suami, no_hp ) VALUES ('$nama','$tgl_lahir','$alamat','$nama-suami','$no_hp')");
    
    if($query)
    {
        echo "Data Berhasil Disimpan";
        echo "<meta http-equiv='refresh' content='2; url=data-posyandu.php'>";
    }
    else
    {
        echo "Data Gagal Tersimpan";
        // mysqli_error($query);
    }
?>