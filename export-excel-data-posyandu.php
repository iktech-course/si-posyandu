<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Posyandu Ke Excel</title>
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Posyandu.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Bayi</th>
                <th>Berat Badan (Gram)</th>
                <th>Tinggi Badan (Cm)</th>
                <th>Jenis Vaksin</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!--Jangan Dihapus-->
            <?php
                include 'koneksi.php';

                $query = mysqli_query($koneksi,"SELECT * FROM data_posyandu");
                $no = 0;
                while($data = mysqli_fetch_array($query))
                {
                    $no++;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['tgl'] ?></td>
                <td><?= $data['nama_bayi'] ?></td>
                <td><?= $data['bb'] ?></td>
                <td><?= $data['tb'] ?></td>
                <td><?= $data['jenis_vaksin'] ?></td>
                <td><?= $data['keterangan'] ?></td>
            </tr>
            <?php
                }
            ?>                                   
        </tbody>    
    </table>
</body>
</html>
