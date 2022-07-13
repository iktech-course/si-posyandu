<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Ibu Hamil Ke Excel</title>
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Ibu Hamil.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nama Suami</th>
            <th>No Hp</th>
            </tr>
        </thead>
        <tbody>
            <!--Jangan Dihapus-->
            <?php
                include 'koneksi.php';

                $query = mysqli_query($koneksi,"SELECT * FROM data_ibu_hamil");
                $no = 0;
                while($data = mysqli_fetch_array($query))
                {
                    $no++;
            ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['nama_suami'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            </tr>
            <?php
                }
            ?>                                   
        </tbody>    
    </table>
</body>
</html>
