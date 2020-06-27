<?php
include("koneksi.php");
$a = $_POST ['kode_booking'];
$b = $_POST ['id_pelanggan'];
$c = $_POST ['kode_servis'];
$d = $_POST ['tanggal_booking'];
$e = $_POST ['waktu_booking'];

$query = mysql_query ("insert into booking (kode_booking,id_pelanggan,kode_servis,tanggal_booking,waktu_booking)
values ('$a','$b','$c','$d','$e')");
 
if ($query)
{echo"<script>alert('Data Kode Booking = $a Sudah Tersimpan');window.location='Booking.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Booking.php' ;</script>";}
?>