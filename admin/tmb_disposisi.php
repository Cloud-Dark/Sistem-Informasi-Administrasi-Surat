<?php 
include 'config.php';
$id=$_POST['id'];
$tanggal_disposisi=$_POST['tanggal'];
$disposisi_ke=$_POST['disposisi_ke'];
$keterangan=$_POST['keterangan'];

mysql_query("insert into disposisi values('$id','$tanggal_disposisi','$disposisi_ke','$keterangan')");
header("location:disposisi.php");

 ?>