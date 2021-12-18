<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "prakwebdb";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	
	if ($connect){
		echo "Koneksi ke MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi ke MYSQL gagal <br>" . mysqli_connect_error();
	}
	
	$sql = "ALTER TABLE product ADD foto varchar(100)";
	
	if(mysqli_query($connect, $sql)){
		echo "Kolom url foto berhasil dibuat";
	}
	else{
		echo "Kolom url foto gagal dibuat <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
		
?>