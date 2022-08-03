<?php
    include('koneksi.php');

    $nama_bayi = $_POST['nama_bayi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $bb_lahir = $_POST['bb_lahir'];
    $tb_lahir = $_POST['tb_lahir'];
    $nama_ortu = $_POST['nama_ortu'];

    // Validasi Sebelum Input Data Ke Database
        // Validasi Umur
        $tahun_sekarang = date('Y');
        $tahun_lahir = substr($tanggal_lahir, 0,4);
        $umur = $tahun_sekarang - $tahun_lahir;

        // Validasi Data Duplikat Berdasarkan Nama Bayi
        $cek_data_bayi = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM data_bayi WHERE nama_bayi = '$nama_bayi' AND tgl_lahir = '$tanggal_lahir'"));

    if($cek_data_bayi > 0) {
        echo "Data Sudah Ada";
        echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
    }
    else if($umur < 3) {
        $query = mysqli_query($koneksi, "INSERT INTO data_bayi (nama_bayi, jenis_kelamin, tgl_lahir, bb_lahir, tb_lahir, nama_ortu ) VALUES (
            '$nama_bayi','$jenis_kelamin','$tanggal_lahir','$bb_lahir','$tb_lahir','$nama_ortu')");
        if($query)
        {
            echo "Data Berhasil Ditambahkan";
            echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
        }
        else
        {
            echo "Data Gagal Ditambahkan";
            mysqli_error($koneksi);
        }
    }
    else {
        echo "Umur Bayi Sudah Tidak Valid";
        echo "<meta http-equiv='refresh' content='2; url=data-bayi.php'>";
    }
   
?>