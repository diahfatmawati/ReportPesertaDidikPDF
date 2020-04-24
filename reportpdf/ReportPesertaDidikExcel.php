<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('C2', 'DATA PESERTA DIDIK');
$sheet->setCellValue('A4', 'No');
$sheet->setCellValue('B4', 'Tanggal');
$sheet->setCellValue('C4', 'Nama');
$sheet->setCellValue('D4', 'Gender');
$sheet->setCellValue('E4', 'NISN');
$sheet->setCellValue('F4', 'NIK');
$sheet->setCellValue('G4', 'Tempat Lahir');
$sheet->setCellValue('H4', 'Tanggal Lahir');
$sheet->setCellValue('I4', 'No Akta');
$sheet->setCellValue('J4', 'Agama');
$sheet->setCellValue('K4', 'Kewarganegaraan');
$sheet->setCellValue('L4', 'Berkebutuhan Khusus');
$sheet->setCellValue('M4', 'Alamat');
$sheet->setCellValue('N4', 'RT');
$sheet->setCellValue('O4', 'RW');
$sheet->setCellValue('P4', 'Dusun');
$sheet->setCellValue('Q4', 'Kelurahan');
$sheet->setCellValue('R4', 'Kecamatan');
$sheet->setCellValue('S4', 'Kode Pos');
$sheet->setCellValue('T4', 'Lintang');
$sheet->setCellValue('U4', 'Bujur');
$sheet->setCellValue('V4', 'Tempat Tinggal');
$sheet->setCellValue('W4', 'Transportasi');
$sheet->setCellValue('X4', 'No KKS');
$sheet->setCellValue('Y4', 'Anak ke');
$sheet->setCellValue('Z4', 'Penerima KPS/PKH');
$sheet->setCellValue('AA4', 'No KPS/PKH');
 
$query = mysqli_query($koneksi,"select * from registrasi");
$i = 5;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['tanggal']);
	$sheet->setCellValue('C'.$i, $row['namalengkap']);
	$sheet->setCellValue('D'.$i, $row['jeniskelamin']);
	$sheet->setCellValue('E'.$i, $row['nisn']);
	$sheet->setCellValue('F'.$i, $row['nik']);
	$sheet->setCellValue('G'.$i, $row['tempatlahir']);
	$sheet->setCellValue('H'.$i, $row['tanggallahir']);
	$sheet->setCellValue('I'.$i, $row['akta']);
	$sheet->setCellValue('J'.$i, $row['agama']);
	$sheet->setCellValue('K'.$i, $row['kewarganegaraan']);
	$sheet->setCellValue('L'.$i, $row['berkebutuhankhusus']);
	$sheet->setCellValue('M'.$i, $row['alamat']);
	$sheet->setCellValue('N'.$i, $row['rt']);
	$sheet->setCellValue('O'.$i, $row['rw']);
	$sheet->setCellValue('P'.$i, $row['dusun']);
	$sheet->setCellValue('Q'.$i, $row['kelurahan']);
	$sheet->setCellValue('R'.$i, $row['kecamatan']);
	$sheet->setCellValue('S'.$i, $row['kodepos']);
	$sheet->setCellValue('T'.$i, $row['lintang']);
	$sheet->setCellValue('U'.$i, $row['bujur']);
	$sheet->setCellValue('V'.$i, $row['tempattinggal']);
	$sheet->setCellValue('W'.$i, $row['transportasi']);
	$sheet->setCellValue('X'.$i, $row['nokks']);
	$sheet->setCellValue('Y'.$i, $row['anak']);
	$sheet->setCellValue('Z'.$i, $row['penerima']);
	$sheet->setCellValue('AA'.$i, $row['nokps']);			
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AA'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Peserta Didik Baru.xlsx');
?>