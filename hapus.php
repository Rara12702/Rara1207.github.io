<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$sql= "DELETE FROM product WHERE id='$id'";
	
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil dihapus";
	?>
		<a href="homeCRUD.php"> Lihat Data </a>
	<?php
	}
	else{
		echo "Data gagal dihapus".mysqli_connect_error();
	}
	mysqli_close($connect);
?>
			
			