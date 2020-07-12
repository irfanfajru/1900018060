<!DOCTYPE html>
<html>
<head>
	<title>Terimakasih</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="con">
<div class="konten">
<?php 
	$nama=$nim=$kelas=$gender=$motiv="";
	if (isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["kelas"]) && isset($_POST["jk"]) && isset($_POST["motivasi"])) {
		$nama=$_POST["nama"];
		$nim=$_POST["nim"];
		$kelas=$_POST["kelas"];
		$gender=$_POST["jk"];
		$motiv=$_POST["motivasi"];
	}
	if (!empty($nama)&&!empty($nim)&&!empty($kelas)&&!empty($gender)&&!empty($motiv)) {
		$fp=fopen("daftar.txt","a+");
        fputs($fp,"$nim\n$nama\n$kelas\n$gender\n$motiv\n");
        fclose($fp);
		echo "<h1>Terimakasih</h1>";
		echo "Nama : ".strtoupper($nama)."<br>";
		echo "<p>NIM : $nim</p>";
		echo "<p>Kelas : $kelas</p>";
		echo "<p>jenis kelamin : $gender</p>";
		echo "<p>Alasan Mendaftar menjadi asprak: $motiv</p>";
	}else{
		echo "silahkan masukkan data dengan lengkap";
	}
?>
<br><br>
<center>
<table>
	<tr>
		<td><a href="index.html" class="tombol">Kembali</a></td>
		<td><a href="table.php" class="tombol">Lihat Pendaftar</a></td>
	</tr>
</table>
</center>
</div>
</div>
</body>
</html>