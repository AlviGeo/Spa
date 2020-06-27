<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from booking where kode_booking='$id'");
if($query) 
{echo"<script>alert('Data telah dihapus');window.location='Booking.php';</script>";}

?>