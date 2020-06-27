<?php
include("koneksi.php");
$A = $_POST['id_admin'];
$B = $_POST['name_admin'];
$C = $_POST['password'];

$query = mysql_query("update admin set name_admin='$B',password='$C' where id_admin='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Admin1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_admin.php';</script>";}

?>