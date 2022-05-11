<!DOCTYPE html>
<html>
<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
	} 

	$sql = "SELECT ID_BT, nama, email, isi FROM bukutamu";
	$result = mysqli_query($conn, $sql);
	?>

<center><h1>Buku Tamu</h1>
<table border="all">
	<caption>Daftar Buku Tamu</caption>
	<br>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
		<?php

	if (mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>
		<td>'.$row['ID_BT'].'</td>
		<td>'.$row['nama'].'</td>
		<td>'.$row['email'].'</td>
		<td>'.$row['isi'].'</td>
	</tr>';
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
		?>
	</tbody>
			
</table>
</center>
</body>
</html>