<?php
include("koneksi.php");
$a = $_POST ['id_admin'];
$b = $_POST ['name_admin'];
$c = $_POST ['password'];

$query = mysql_query ("insert into admin (id_admin,name_admin,password)
values ('$a','$b','$c')");
 
if ($query)
{echo"<script>alert('Data Kode Admin = $a Sudah Tersimpan');window.location='Admin.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Admin.php' ;</script>";}
?>