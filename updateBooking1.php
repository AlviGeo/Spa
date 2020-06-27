<?php
include("koneksi.php");
$A = $_POST['kode_booking'];
$B = $_POST['id_pelanggan'];
$C = $_POST['kode_servis'];
$D = $_POST['tanggal_booking'];
$E = $_POST['waktu_booking'];

$query = mysql_query("update booking set id_pelanggan='$B',kode_servis='$C',tanggal_booking='$D',waktu_booking='$E' where kode_booking='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Booking1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_booking.php';</script>";}

?>