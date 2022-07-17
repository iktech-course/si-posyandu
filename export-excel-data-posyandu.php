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
            </tr>
        </thead>
        <tbody>
            <!--Jangan Dihapus-->
            <?php
                include 'koneksi.php';
                $sql = "SELECT data_posyandu.id, data_posyandu.id_bayi, data_bayi.nama_bayi, data_posyandu.bb, data_posyandu.tb, data_posyandu.jenis_vaksin, data_posyandu.tgl, data_posyandu.keterangan FROM data_posyandu INNER JOIN data_bayi ON data_posyandu.id_bayi = data_bayi.id";
                $query = mysqli_query($koneksi,$sql);
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
