<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_siswa";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
	}


if (!empty($tanggal) && !empty($namalengkap) && !empty($jeniskelamin) && !empty($nisn) && !empty($nik) && !empty($tempatlahir) && !empty($tanggallahir) && !empty($akta) && !empty($agama) && !empty($kewarganegaraan) && !empty($berkebutuhankhusus) && !empty($alamat) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($kelurahan) && !empty($kecamatan) && !empty($kodepos) && !empty($lintang) && !empty($bujur) && !empty($tempattinggal) && !empty($transportasi) && !empty($nokks) && !empty($anak) && !empty($penerima) && !empty($nokps)) {
	$sql = "INSERT INTO registrasi (tanggal, namalengkap, jeniskelamin, nisn, nik, tempatlahir, tanggallahir, akta, agama, kewarganegaraan, berkebutuhankhusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kodepos, lintang, bujur, tempattinggal, transportasi, nokks, anak, penerima, nokps) VALUES ('$tanggal','$namalengkap','$jeniskelamin','$nisn','$nik','$tempatlahir', '$tanggallahir', '$akta', '$agama', '$kewarganegaraan', '$berkebutuhankhusus', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kodepos', '$lintang', '$bujur', '$tempattinggal', '$transportasi', '$nokks', '$anak', '$penerima', '$nokps')";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Sukses')</script>";
} else {
	echo "<script>alert('Gagal')</script>";
}
}
mysqli_close($conn);
?>