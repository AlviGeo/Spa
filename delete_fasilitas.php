<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from fasilitas where kode_fasilitas='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Fasilitas.php';</script>";}

?>