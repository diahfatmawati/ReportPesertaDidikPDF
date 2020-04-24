<?php
$servername = "localhost";
$username = "root";
$dbname = "db_siswa";

include "koneksi.php";

$sql = "SELECT * FROM registrasi ORDER BY tanggal;";
$query = mysqli_query($koneksi,$sql) or die ("Proses cetak gagal");
echo "<h1 align=center> Data Peserta Didik </h1>
	<table width='100%' cellpadding='1' cellspacing='1' border='1' align=center>
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>NISN</th>
		<th>NIK</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>No Akta</th>
		<th>Agama</th>
		<th>Kewarganegaraan</th>
		<th>Berkebutuhan Khusus</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Dusun</th>
		<th>Kelurahan</th>
		<th>Kecamatan</th>
		<th>Kode Pos</th>
		<th>Lintang</th>
		<th>Bujur</th>
		<th>Tempat Tinggal</th>
		<th>Transportasi</th>
		<th>No KKS</th>
		<th>Anak ke</th>
		<th>Penerima KPS/PKH</th>
		<th>No KPS/PKH</th>
	</tr>";

$no = 1;
	while ($hasil = mysqli_fetch_array($query)) {
		echo "<tr>
			<td>$hasil[id]</td>	
			<td>$hasil[tanggal]</td>
			<td>$hasil[namalengkap]</td>
			<td>$hasil[jeniskelamin]</td>
			<td>$hasil[nisn]</td>
			<td>$hasil[nik]</td>
			<td>$hasil[tempatlahir]</td>
			<td>$hasil[tanggallahir]</td>
			<td>$hasil[akta]</td>	
			<td>$hasil[agama]</td>
			<td>$hasil[kewarganegaraan]</td>
			<td>$hasil[berkebutuhankhusus]</td>
			<td>$hasil[alamat]</td>
			<td>$hasil[rt]</td>
			<td>$hasil[rw]</td>
			<td>$hasil[dusun]</td>	
			<td>$hasil[kelurahan]</td>
			<td>$hasil[kecamatan]</td>
			<td>$hasil[kodepos]</td>
			<td>$hasil[lintang]</td>
			<td>$hasil[bujur]</td>
			<td>$hasil[tempattinggal]</td>
			<td>$hasil[transportasi]</td>
			<td>$hasil[nokks]</td>	
			<td>$hasil[anak]</td>
			<td>$hasil[penerima]</td>
			<td>$hasil[nokps]</td>
			</tr>";
	$no++;
	}
	echo "</table>";
?>
<title> Cetak Data Kontak </title><br>
<center> Klik <a href="ReportPesertaDidikExcel.php"> Export to Excel </a> 
		untuk report data peserta didik baru ke excel </center><br>
<center> Klik <a href="ReportPesertaDidikPDF.php"> Export to PDF </a> 
		untuk report data peserta didik baru ke pdf </center>