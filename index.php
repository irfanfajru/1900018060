<?php
		$file="daftar.txt";
		$myfile=fopen($file,"r");
		$n=count(file($file))/5;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Asisten Praktikum Pemrograman Web UAD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="con">
		<div class="konten">
			<h1>Selamat Datang</h1>
			<h3>Calon Asisten Praktikum Pemrograman Web UAD</h3>
			<center>
			<table>
				<tr>
					<td><h3>Pendaftar Saat ini :</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo "<h1>$n</h1>"; ?><br><br></td>
				</tr>
				<tr>
					<td><a href="form.html" class="tombol">Daftar</a></td>
					<td><a href="table.php" class="tombol">Lihat Pendaftar</a></td>
				</tr>
			</table>
			</center>
		</div>
	</div>
</body>
</html>