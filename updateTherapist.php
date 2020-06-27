<?php
include("koneksi.php");
$A = $_POST['id_therapist'];
$B = $_POST['nama_therapist'];

$query = mysql_query("update therapist set nama_therapist='$B' where id_therapist='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Therapist1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_therapist.php';</script>";}

?>