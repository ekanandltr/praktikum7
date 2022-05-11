<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>

	<h2>DATA PEGAWAI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PEGAWAI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Id_departemen</th>
			<th>Id_job</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['id_departemen']; ?></td>
				<td><?php echo $d['id_job']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>