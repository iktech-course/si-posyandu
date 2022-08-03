<?php
    include('koneksi.php');

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nama_suami = $_POST['nama_suami'];
    $no_hp = $_POST['no_hp'];

    // Validasi Data Ganda Berdasarkan nama dan nama_suami
    $cek_data_ibu_hamil = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM data_ibu_hamil WHERE nama = '$nama' AND nama_suami = '$nama_suami'"));
    
    if($cek_data_ibu_hamil > 0) {
        echo "Data Sudah Ada";
        echo "<meta http-equiv='refresh' content='2; url=data-ibu-hamil.php'>";
    }
    else {
        $query = mysqli_query($koneksi, "INSERT INTO data_ibu_hamil (nama, tgl_lahir, alamat, nama_suami, no_hp) VALUES (
            '$nama','$tgl_lahir','$alamat','$nama_suami','$no_hp')");
        if($query)
        {
            echo "Data Berhasil Ditambahkan";
            echo "<meta http-equiv='refresh' content='2; url=data-ibu-hamil.php'>";
        }
        else
        {
            echo "Data Gagal Tersimpan";
            mysqli_error($koneksi);
        }
    }
?>