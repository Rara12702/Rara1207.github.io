<html>
<head>
	<title>Tambah Foto</title>
</head>
<body>
		<?php
			include "koneksi.php";
			$id = $_GET['id'];
			$query = "SELECT * FROM product WHERE id='$id'";
			$result = mysqli_query($connect, $query);
		?>
		<table>
			<form method="GET" action="uploadFoto.php">
			<?php
				while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> ID </td>
				<td> <input type="number" name="id" value="<?php echo $row['id'];?>" readonly></td>
			</tr>
			<tr>
				<td> Nama Produk </td>
				<td> <input type="text" name="name" value="<?php echo $row['product_name'];?>" readonly></td>
			</tr>
			<tr>
				<td> Harga </td>
				<td> <input type="number" name="prices" value="<?php echo $row['harga'];?>" readonly></td>
			</tr>
			<tr>
				<td> Tambah Foto </td>
				<td> <input type="file" name="foto" value="<?php echo $row['foto'];?>" ></td>
			</tr>
			<tr>
				<td> <input type="submit" name="edit" value="Upload"></td>
			</tr>
			<?php
				}
			?>
			</form>
		</table>
	</body>
</html>