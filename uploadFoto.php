<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['prices'];
	$foto = $_GET['foto'];
	
	$query= "UPDATE product SET product_name='$nama', harga='$harga', foto='$foto'
			WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	
	if ($result){
		echo "Berhasil Update Data";
	?>
		<a href="homeCRUD.php"> Lihat Data </a>
	<?php
	}
	else{
		echo "Gagal Update Data" . mysqli_error($connect);
	}
?>
			