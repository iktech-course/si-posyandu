<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_si_posyandu";

	$koneksi = mysqli_connect($host,$username,$password,$database);

	if(mysqli_connect_errno())
	{
		echo "Database Tidak Terhubung";
	}
?> 	