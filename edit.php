<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>

	<h2>DATA PEGAWAI</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEGAWAI</h3>

	<?php
	include 'koneksi.php';
	$id_pegawai = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pegawai where id_pegawai='$id_pegawai'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Id_departemen</td>
					<td><input type="number" name="Id_departemen" value="<?php echo $d['id_departemen']; ?>"></td>
				</tr>
				<tr>
					<td>Id_job</td>
					<td><input type="number" name="Id_job" value="<?php echo $d['id_job']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>