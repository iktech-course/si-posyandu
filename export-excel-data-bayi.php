<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Bayi Ke Excel</title>
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Bayi.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Bayi</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>BB Lahir</th>
            <th>TB Lahir</th>
            <th>Nama Ortu</th>
            </tr>
        </thead>
        <tbody>
            <!--Jangan Dihapus-->
            <?php
                include 'koneksi.php';

                $query = mysqli_query($koneksi,"SELECT * FROM data_bayi");
                $no = 0;
                while($data = mysqli_fetch_array($query))
                {
                    $no++;
            ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_bayi'] ?></td>
            <td>
             <?php
                if($data['jenis_kelamin'] == 'L') {
                 echo("Laki-Laki");
                 } 
                 else {
                     echo("Perempuan");
                 }
              ?>
            </td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['bb_lahir'] ?></td>
            <td><?= $data['tb_lahir'] ?></td>
            <td><?= $data['nama_ortu'] ?></td>
            </tr>
            <?php
                }
            ?>                                   
        </tbody>    
    </table>
</body>
</html>
