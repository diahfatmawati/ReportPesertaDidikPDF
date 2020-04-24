<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftaran Peserta Didik Baru </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: red;}
		.body{
			margin-top: 1cm; margin-right: 2cm;
			margin-bottom: 1cm; margin-left: 2cm;
			font-family: times new roman; font-size: 20px;
		}
		.main {font-weight: bold;  font-style: normal; font-family: times new roman;}
		.main1 {font-weight: bold; font-family: times new roman;}
		.main2 {font-family: times new roman;}
		.main3 {color: black; font-weight: bold; font-family: times new roman; font-size: 20px; text-align: center;}
	</style>
</head>
<body>
<?php
$error_tanggal = "";
$error_namalengkap = "";
$error_jeniskelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tempatlahir = "";
$error_tanggallahir = "";
$error_akta = "";
$error_agama = "";
$error_kewarganegaraan = "";
$error_berkebutuhankhusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tempattinggal = "";
$error_transportasi = "";
$error_nokks = "";
$error_anak = "";
$error_penerima = "";
$error_nokps = "";

$tanggal = "";
$namalengkap = "";
$jeniskelamin = "";
$nisn = "";
$nik = "";
$tempatlahir = "";
$tanggallahir = "";
$akta = "";
$agama = "";
$kewarganegaraan = "";
$berkebutuhankhusus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tempattinggal = "";
$transportasi = "";
$nokks = "";
$anak = "";
$penerima = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["tanggal"]))
	{
		$error_tanggal = "wajib di isi";
	}
	else
	{
		$tanggal = cek_input($_POST["tanggal"]);
	}

	if (empty($_POST["namalengkap"]))
	{
		$error_namalengkap = "wajib di isi";
	}
	else
	{
		$namalengkap = cek_input($_POST["namalengkap"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$namalengkap)) 
		{
			$namalengkapErr = "input hanya huruf dan spasi";
		}
	}

	if (empty($_POST["jeniskelamin"]))
	{
		$error_jeniskelamin = "pilih salah satu";
	}
	else
	{
		$jeniskelamin = cek_input($_POST["jeniskelamin"]);
	}

	if (empty($_POST["nisn"]))
	{
		$error_nisn = "wajib di isi";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);

		if (!is_numeric($nisn)) 
		{
			$error_nisn = "input hanya boleh angka";
		}
	}

	if (empty($_POST["nik"]))
	{
		$error_nik = "wajib di isi";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);

		if (!is_numeric($nik)) 
		{
			$error_nik = "input hanya boleh angka";
		}
	}

	if (empty($_POST["tempatlahir"]))
	{
		$error_tempatlahir = "wajib di isi";
	}
	else
	{
		$tempatlahir = cek_input($_POST["tempatlahir"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tempatlahir)) 
		{
			$tempatlahirErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tanggallahir"]))
	{
		$error_tanggallahir = "wajib di isi";
	}
	else
	{
		$tanggallahir = cek_input($_POST["tanggallahir"]);
	}

	if (empty($_POST["akta"]))
	{
		$error_akta = "wajib di isi";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);

		if (!is_numeric($akta)) 
		{
			$error_akta = "input hanya boleh angka";
		}
	}

	if (empty($_POST["agama"]))
	{
		$error_agama = "pilih salah satu";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
	}

	if (empty($_POST["kewarganegaraan"]))
	{
		$error_kewarganegaraan = "pilih salah satu";
	}
	else
	{
		$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
	}

	if (empty($_POST["berkebutuhankhusus"]))
	{
		$error_berkebutuhankhusus = "input 'tidak' apabila tidak berkebutuhan khusus";
	}
	else
	{
		$berkebutuhankhusus = cek_input($_POST["berkebutuhankhusus"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$berkebutuhankhusus)) 
		{
			$berkebutuhankhususErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["alamat"]))
	{
		$error_alamat = "wajib di isi";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$alamat)) 
		{
			$alamatErr = "input hanya huruf, angka dan spasi";
		}
	}

	if (empty($_POST["rt"]))
	{
		$error_rt = "wajib di isi";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);

		if (!is_numeric($rt)) 
		{
			$error_rt = "input hanya boleh angka";
		}
	}

	if (empty($_POST["rw"]))
	{
		$error_rw = "wajib di isi";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);

		if (!is_numeric($rw)) 
		{
			$error_rw = "input hanya boleh angka";
		}
	}

	if (empty($_POST["dusun"]))
	{
		$error_dusun = "wajib di isi";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dusun)) 
		{
			$dusunErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "wajib di isi";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan)) 
		{
			$kelurahanErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "wajib di isi";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan)) 
		{
			$kecamatanErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kodepos"]))
	{
		$error_kodepos = "wajib di isi";
	}
	else
	{
		$kodepos = cek_input($_POST["kodepos"]);

		if (!is_numeric($kodepos)) 
		{
			$error_kodepos = "input hanya boleh angka";
		}
	}

	if (empty($_POST["lintang"]))
	{
		$error_lintang = "wajib di isi";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lintang)) 
		{
			$lintangErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["bujur"]))
	{
		$error_bujur = "wajib di isi";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$bujur)) 
		{
			$bujurErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tempattinggal"]))
	{
		$error_tempattinggal = "wajib di isi";
	}
	else
	{
		$tempattinggal = cek_input($_POST["tempattinggal"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tempattinggal)) 
		{
			$tempattinggalErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "wajib di isi";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$transportasi)) 
		{
			$transportasiErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["nokks"]))
	{
		$error_nokks = "wajib di isi";
	}
	else
	{
		$nokks = cek_input($_POST["nokks"]);

		if (!is_numeric($nokks)) 
		{
			$error_nokks = "input hanya boleh angka";
		}
	}

	if (empty($_POST["anak"]))
	{
		$error_anak = "wajib di isi";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);

		if (!is_numeric($anak)) 
		{
			$error_anak = "input hanya boleh angka";
		}
	}

	if (empty($_POST["penerima"]))
	{
		$error_penerima = "pilih salah satu";
	}
	else
	{
		$penerima = cek_input($_POST["penerima"]);
	}

	if (empty($_POST["nokps"]))
	{
		$error_nokps = "wajib di isi ";
	}
	else
	{
		$nokps = cek_input($_POST["nokps"]);

		if (!is_numeric($nokps)) 
		{
			$error_nokps = "input hanya boleh angka";
		}
	}
}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header bg-warning text-white">
				<h2 class="main" align="center"> FORMULIR PESERTA DIDIK </h2>
			</div>

			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="card-body">
				<div align="right">
					<table class="main3" align="right" width="120" border="4" cellspacing="20" cellpadding="2"><tr> <td class="main3" align="center"> F-PD </td> </tr></table>
				</div><br>
			
			<div class="form-group row">
				<label for="tanggal" class="col-sm-2 col-form-label main2"> Tanggal </label>
				<label> : </label>
				<div class="col-sm-2">
					<input type="date" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : "");?> main2" id="tanggal" value="<?php echo $tanggal; ?>">
					<span class="warning"><?php echo $error_tanggal; ?></span>
				</div>
			</div>

			<div class="card-header col-md-13 bg-primary text-white ">
				<h4 class="main1" align="left"> DATA PRIBADI </h4>
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label for="namalengkap" class="col-sm-2 col-form-label main2"> 1. &nbsp; Nama Lengkap </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="namalengkap" class="form-control <?php echo($error_namalengkap !="" ? "is-invalid" : "");?> main2" id="namalengkap" placeholder="Nama lengkap" value="<?php echo $namalengkap; ?>">
						<span class="warning"><?php echo $error_namalengkap; ?></span>
					</div>
				</div>

				<div class="from-group row radio-inline">
					<label for="jeniskelamin" class="col-sm-2 col-form-label main2"> 2. &nbsp; Jenis Kelamin </label>
					<label> : </label>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="jeniskelamin" value="Laki-laki" id="jeniskelamin" > Laki-laki </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="jeniskelamin" value="Perempuan" id="jeniskelamin" > Perempuan </label>
					</div>
					<span class="warning"><?php echo $error_jeniskelamin; ?></span>
				</div>

				<div class="form-group row">
					<label for="nisn" class="col-sm-2 col-form-label main2"> 3. &nbsp; NISN </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?> main2" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
						<span class="warning"><?php echo $error_nisn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class="col-sm-2 col-form-label main2"> 4. &nbsp; NIK / No. KITAS <br> &nbsp;&nbsp;&nbsp;&nbsp; (Untuk WNA) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?> main2" id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
						<span class="warning"><?php echo $error_nik; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tempatlahir" class="col-sm-2 col-form-label main2"> 5. &nbsp; Tempat Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : "");?> main2" id="tempatlahir" placeholder="Tempat lahir" value="<?php echo $tempatlahir; ?>">
						<span class="warning"><?php echo $error_tempatlahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tanggallahir" class="col-sm-2 col-form-label main2"> 6. &nbsp; Tanggal Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="date" name="tanggallahir" class="form-control <?php echo($error_tanggallahir !="" ? "is-invalid" : "");?> main2" id="tanggallahir"  value="<?php echo $tanggallahir; ?>">
						<span class="warning"><?php echo $error_tanggallahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="akta" class="col-sm-2 col-form-label main2"> 7. &nbsp; No.Registrasi Akta Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : "");?> main2" id="akta" placeholder="No akta lahir" value="<?php echo $akta; ?>">
						<span class="warning"><?php echo $error_akta; ?></span>
					</div>
				</div>

				<div class="from-group row radio-inline">
					<label for="agama" class="col-sm-2 col-form-label main2"> 8. &nbsp; Agama </label>
					<label> : </label>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Islam" id="agama" > Islam </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Kristen" id="agama" > Kristen </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Katolik" id="agama" > Katolik </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Hindu" id="agama" > Hindu </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Budha" id="agama" > Budha </label>
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="agama" value="Konghucu" id="agama" > Konghucu </label>
					</div>
					<span class="warning"><?php echo $error_agama; ?></span>
				</div>

				<div class="from-group row radio-inline">
					<label for="kewarganegaraan" class="col-sm-2 col-form-label main2"> 9. &nbsp;&nbsp;Kewarganegaraan </label>
					<label> : </label> 
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="kewarganegaraan" value="WNI" id="kewarganegaraan" > WNI (Warga Negara Indonesia) </label> 
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="kewarganegaraan" value="WNA" id="kewarganegaraan" > WNA (Warga Negara Asing) </label>
					</div>
					<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
				</div>

				<div class="form-group row">
					<label for="berkebutuhankhusus" class="col-sm-2 col-form-label main2"> 10. Berkebutuhan Khusus </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="berkebutuhankhusus" class="form-control <?php echo($error_berkebutuhankhusus !="" ? "is-invalid" : "");?> main2" id="berkebutuhankhusus" placeholder="Kebutuhan khusus" value="<?php echo $berkebutuhankhusus; ?>">
						<span class="warning"><?php echo $error_berkebutuhankhusus; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-sm-2 col-form-label main2"> 11. Alamat Jalan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : "");?> main2" id="alamat" placeholder="Alamat tempat tinggal saat ini" value="<?php echo $alamat; ?>">
						<span class="warning"><?php echo $error_alamat; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rt" class="col-sm-2 col-form-label main2"> 12. RT </label>
					<label> : </label>
					<div class="col-sm-1">
						<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : "");?> main2" id="rt" placeholder="RT" value="<?php echo $rt; ?>">
						<span class="warning"><?php echo $error_rt; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rw" class="col-sm-2 col-form-label main2"> 13. RW </label>
					<label> : </label>
					<div class="col-sm-1">
						<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="RW" value="<?php echo $rw; ?>">
						<span class="warning"><?php echo $error_rw; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="dusun" class="col-sm-2 col-form-label main2"> 14. Nama Dusun </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="Dusun" value="<?php echo $dusun; ?>">
						<span class="warning"><?php echo $error_dusun; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kelurahan" class="col-sm-2 col-form-label main2"> 15. Nama Kelurahan/Desa </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : "");?> main2" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>">
						<span class="warning"><?php echo $error_kelurahan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kecamatan" class="col-sm-2 col-form-label main2"> 16. Kecamatan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : "");?> main2" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
						<span class="warning"><?php echo $error_kecamatan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kodepos" class="col-sm-2 col-form-label main2"> 17. Kode Pos </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : "");?> main2" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>">
						<span class="warning"><?php echo $error_kodepos; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="lintang" class="col-sm-2 col-form-label main2"> 18. Lintang </label>
					<label> : </label>
					<div class="col-sm-1">
						<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : "");?> main2" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>">
						<span class="warning"><?php echo $error_lintang; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bujur" class="col-sm-2 col-form-label main2"> 19. Bujur </label>
					<label> : </label>
					<div class="col-sm-1">
						<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : "");?> main2" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>">
						<span class="warning"><?php echo $error_bujur; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tempattinggal" class="col-sm-2 col-form-label main2"> 20. Tempat tinggal </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="tempattinggal" class="form-control <?php echo($error_tempattinggal !="" ? "is-invalid" : "");?> main2" id="tempattinggal" placeholder="Tinggal dengan Orang Tua atau Wali" value="<?php echo $tempattinggal; ?>">
						<span class="warning"><?php echo $error_tempattinggal; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="transportasi" class="col-sm-2 col-form-label main2"> 21. Moda Transportasi </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="transportasi" class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="Transportasi" value="<?php echo $transportasi; ?>">
						<span class="warning"><?php echo $error_transportasi; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokks" class="col-sm-2 col-form-label main2"> 22. Nomor KKS <br> (Kartu Keluarga Sejahtera) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nokks" class="form-control <?php echo($error_nokks !="" ? "is-invalid" : "");?> main2" id="nokks" placeholder="No KKS" value="<?php echo $nokks; ?>">
						<span class="warning"><?php echo $error_nokks; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="anak" class="col-sm-2 col-form-label main2"> 23. Anak ke berapa <br>  &nbsp;&nbsp;&nbsp;&nbsp; (Berdasarkan KK) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : "");?> main2" id="anak" placeholder="Anak ke ..." value="<?php echo $anak; ?>">
						<span class="warning"><?php echo $error_anak; ?></span>
					</div>
				</div>

				<div class="from-group row radio-inline">
					<label for="penerima" class="col-sm-2 col-form-label main2"> 24. Penerima KPS/PKH </label>
					<label> : </label> 
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="penerima" value="Ya" id="penerima" > Ya </label> 
					</div>
					<br> &nbsp; &nbsp; <br>
					<div class="radio-inline main2">
					<label><input type="radio" name="penerima" value="Tidak" id="penerima" > Tidak </label>
					</div>
					<span class="warning"><?php echo $error_penerima; ?></span>
				</div>

				<div class="form-group row">
					<label for="nokps" class="col-sm-2 col-form-label main2"> 25. No. KPS/PKH <br>&nbsp;&nbsp;&nbsp;&nbsp; (apabila menerima) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : "");?> main2" id="nokps" value="<?php echo $nokps; ?>">
						<span class="warning"><?php echo $error_nokps; ?></span>
					</div>
				</div>

				<div class="form-group row" align="right">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"> Kirim </button>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
</div>
<?php
echo "<form class=body>";

include "proses.php";

echo "<h2> Output Data Pendaftaran Peserta Didik Baru : </h2>";
echo "<br>";
echo "<table width='600' border='0'>";
echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "Tanggal";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$tanggal;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "1. Nama Lengkap";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$namalengkap;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "2. Jenis Kelamin";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$jeniskelamin;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "3. NISN";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$nisn;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "4. NIK / No.KITS ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$nik;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "5. Tempat Lahir ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$tempatlahir;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "6. Tanggal Lahir ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$tanggallahir;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "7. No Registrasi Akta Lahir ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$akta;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "8. Agama ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$agama;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "9. Kewarganegaraan ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$kewarganegaraan;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "10. Berkebutuhan Khusus";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$berkebutuhankhusus;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "11. Alamat Jalan ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$alamat;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "12. RT ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$rt;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "13. RW ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$rw;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "14. Nama Dusun ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$dusun;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "15. Nama Kelurahan/Desa ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$kelurahan;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "16. Kecamatan ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$kecamatan;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "17. Kode Pos ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$kodepos;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "18. Lintang ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$lintang;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "19. Bujur ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$bujur;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "20. Tempat Tinggal ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$tempattinggal;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "21. Moda Transportasi ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$transportasi;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "22. Nomor KKS ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$nokks;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "23. Anak ke berapa ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$anak;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "24. Penerima KPS/PKH ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$nokps;
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td width='30'>";
	echo "&nbsp;";
	echo "</td>";
	echo "<td width='200'>";
	echo "25. No. KPS/PKH ";
	echo "</td>";
	echo "<td width='10'>";
	echo ":";
	echo "</td>";
	echo "<td width='250'>";
	echo "".$tempatlahir;
	echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td width='30'><button><a href = 'cetak.php'> cetak </a></button></td>";
echo "</tr>";
echo "</form>";
?>
</body>
</html>