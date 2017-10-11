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
			<form action="data.php" action="POST">
				<tr>
					<td>Nama Barang</td>
					<td>
						<input type="text" name="nama_barang">
					</td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td align="right">
						<input type="number" style="text-align:right" name="harga_barang">
					</td>
				</tr>			
				<tr>
					<td>
					<center>
						<button type="submit">kirim</button>
					</center>
					</td>
					<td><center>
						<button type="reset">batal</button>
					</center>
					</td>
				</tr>
			</form>
		</table>
	</div>
</center>
</body>
</html>