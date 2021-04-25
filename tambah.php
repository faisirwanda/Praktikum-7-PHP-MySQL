<?php  
include 'koneksi.php';
//menyimpan data kedalam variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];
// query SQL untuk insert data
$query = "INSERT INTO kontak SET id='$id', nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email',alamat='$alamat',kota='$kota',pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman indexpraktikum.php
header("location:indexpraktikum.php");
?>