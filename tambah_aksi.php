<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$id_departemen = $_POST['id_departemen'];
$id_job = $_POST['id_job'];

// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$email','$telepon', '$id_departemen', '$id_job')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>