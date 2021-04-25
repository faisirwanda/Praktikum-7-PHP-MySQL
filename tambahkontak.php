<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="tambah.php">
		<table>
			<tr><td><b>ID</b></td><td><input type="text" onkeyup="isi_otomatis()" name="id"></td></tr>
			<tr><td><b>NAMA</b></td><td><input type="text" name="nama"></td></tr>
			<tr><td><b>JENIS KELAMIN</b></td><td>
				<input type="radio" name="jenis_kelamin" value="L">Laki-laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
			</td></tr>
			<tr><td><b>EMAIL</b></td><td><input type="text" name="email"></td></tr>
			<tr><td><b>ALAMAT</b></td><td><input type="text" name="alamat"></td></tr>
			<tr><td><b>KOTA</b></td><td><input type="text" name="kota"></td></tr>
			<tr><td><b>PESAN</b></td><td><input type="text" name="pesan" style="width: 300px; height: 100px;"></td></tr>
			<tr><td colspan="2"><button type="submit" value="tambah">SIMPAN</button></td></tr>
		</table>
	</form>
</body>
</html>
