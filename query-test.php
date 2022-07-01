<?php
include 'koneksi.php';

$sql = "SELECT * FROM data_posyandu";
$query = mysqli_query($koneksi, $sql);
$no = 0;

echo($sql);

$data = mysqli_fetch_array($query);

var_dump($data);
die();