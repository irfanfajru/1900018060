<!DOCTYPE html>
<html>
<head>
	<title>Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		table,th,td{
			padding: 5px;
			border: 1px solid black;
		}
		th{
			background-color: grey;
		}
	</style>
</head>
<body>
<div class="con">
<div class="kepala">
	<h1>Pendaftar</h1>
	<p>Asisten Praktikum Pemrograman Web UAD</p>
</div>
<div class="pisah"></div>
<div class="konten">
	<table>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Alasan</th>
		</tr>
		<?php
		$flag=0;
		$nomor=1;
		$file="daftar.txt";
		$myfile=fopen($file,"r");
		$n=count(file($file))/5+2;
		while(!feof($myfile)){
			if($nomor==$n){
				break;
			}
			else if ($flag==0) {?>
		<tr>
		</tr>
		<td><?php echo $nomor;$flag++;$nomor++;?></td>
		<?php }else if($flag>0 and $flag <=5){ ?>
		<td><?php echo fgets($myfile);$flag++; ?></td>
		<?php }
		else{$flag=0;}
		}
		fclose($myfile);
		?>
	</table>
	<br><br>
	<form action="reset.php" method="post">
		<input type="submit" name="reset" class="tombol" value="Reset">
	</form>
	<br><br>
	<a href="index.php" class="tombol">Kembali</a>
</div>
</div>
</body>
</html>
