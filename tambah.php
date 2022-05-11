<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pegawai</title>
</head>
<body>

	<h2>DATA PEGAWAI</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PEGAWAI</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Id Departemen</td>
				<td><input type="number" name="id_departemen"></td>
			</tr>
			<tr>
				<td>Id Job</td>
				<td><input type="number" name="id_job"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>