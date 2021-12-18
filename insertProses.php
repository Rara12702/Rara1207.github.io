<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];
	$foto = $_GET['foto'];
	
	$sql= "INSERT INTO product (id, product_name, harga, foto)
			VALUES ('$id', '$nama', '$harga','$foto')";
	
	if(mysqli_query($connect, $sql)){
		echo "Record berhasil ditambahkan";
	}
	else{
		echo "Record gagal ditambahkan<br>". mysqli_error($connect);
	}
	mysqli_close($connect);
		
?>