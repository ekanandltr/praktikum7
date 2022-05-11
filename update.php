<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$id_departemen = $_POST['id_departemen'];
$id_job = $_POST['id_job'];

// update data ke database
mysqli_query($koneksi,"update pegawai set nama='$nama', email='$email', telepon='$telepon', id_departemen='$id_departemen', id_job='$id_job' where id_pegawai='$id_pegawai'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>