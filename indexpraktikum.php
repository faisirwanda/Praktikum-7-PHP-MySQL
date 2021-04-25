<h2>Daftar Nama Kontak</h2> <!-- judul pada halaman web -->
<table border="1"> <!-- membuat kolom tabel -->
	<tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php  
	include 'koneksi.php'; //koneksi dengan file konek database
	$kontak = mysqli_query($koneksi, "SELECT *from kontak");//query untuk mengakses tabel kontak di database
	$no=1;
	foreach ($kontak as $row) { //perulangan untuk memmbaca nilai Array
		$jenis_kelamin = $row ['jenis_kelamin']=='P'?'Perempuan': 'Laki-laki'; //perubahan nilai dari database pada saat diakses di web
		echo "<tr> 
			<td>$no</td>
			<td>".$row['id']."</td>
			<td>".$row['nama']."</td>
			<td>".$jenis_kelamin."</td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."</td>
			<td>".$row['pesan']."</td>
		</tr>"; //membuat isi tabel 
		$no++;
	}
	?>
</table>