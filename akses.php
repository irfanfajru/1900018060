<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
		echo "<h1>Selamat Datang </h1>".strtoupper($nama)."<br>";
		echo "<p>NIM : .$nim</p>";
		echo "<p>Kelas : .$kelas</p>";
		echo "<p>jenis kelamin : .$gender</p>";
		echo "<p>Motivasi masuk jurusan <br>teknik informatika : .$motiv</p>";
	}else{
		echo "silahkan masukkan data dengan lengkap";
	}
?>
</body>
</html>