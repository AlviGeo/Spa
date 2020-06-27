<?php
include("koneksi.php");
$a = $_POST ['id_therapist'];
$b = $_POST ['nama_therapist'];

$query = mysql_query ("insert into therapist (id_therapist, nama_therapist)
values ('$a','$b')");
 
if ($query)
{echo"<script>alert('Data ID Therapist = $a Sudah Tersimpan');window.location='Therapist.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Therapist.php' ;</script>";}
?>