<?php
	$fp=fopen("daftar.txt","w");
        fputs($fp,"");
        fclose($fp);
        header('location:table.php');
?>