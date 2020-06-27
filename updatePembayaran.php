<?php
include("koneksi.php");
$A = $_POST['id_pembayaran'];
$B = $_POST['kode_booking'];
$C = $_POST['kode_servis'];
$D = $_POST['id_pelanggan'];
$E = $_POST['deskripsi_pembayaran'];

$query = mysql_query("update pembayaran set kode_booking='$B',kode_servis='$C',id_pelanggan='$D',deskripsi_pembayaran='$E' where id_pembayaran='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Pembayaran1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_pembayaran.php';</script>";}

?>