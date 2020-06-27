<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from servis where kode_servis='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Servis.php';</script>";}

?>