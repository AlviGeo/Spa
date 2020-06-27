<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from perlengkapan where id_perlengkapan='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Perlengkapan.php';</script>";}
?>