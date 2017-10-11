<html>
<head>
	<title><?php echo "hai";?> abas</title>
	<style>
	
	td input{
		width:100%;
		text-transform:capitalize;
	}
	
	</style>
	
</head>
<body>
<center>
	<div>
	<h1>DATA BARANG</h1>
		<table border="1">

			<tr>
				<td>Nama Barang</td>
				<td>
					<?php echo $_GET['nama_barang'];?>
				</td>
			</tr>
			<tr>
				<td>Harga Barang</td>
				<td align="right">
					<?php echo $_GET['harga_barang'];?>
				</td>
			</tr>			

		</table>
		<a href="index.php">back</a>
	</div>
</center>
</body>
</html>