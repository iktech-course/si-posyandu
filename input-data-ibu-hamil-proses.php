<?php
    include('koneksi.php');

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nama_suami = $_POST['nama_suami'];
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi, "INSERT INTO data_ibu_hamil (nama, tgl_lahir, alamat, nama_suami, no_hp ) VALUES (
        '$nama','$tgl_lahir','$alamat','$nama_suami','$no_hp')");

    // echo("INSERT INTO data_ibu_hamil (nama, tgl_lahir, alamat, nama_suami, no_hp ) VALUES ('$nama','$tgl_lahir','$alamat','$nama-suami','$no_hp')");
    
    if($query)
    {
        echo "Data Berhasil Disimpan";
        echo "<meta http-equiv='refresh' content='2; url=data-ibu-hamil.php'>";
    }
    else
    {
        echo "Data Gagal Tersimpan";
        // mysqli_error($query);
    }
?>