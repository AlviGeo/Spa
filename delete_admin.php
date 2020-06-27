<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from admin where id_admin='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Admin.php';</script>";}

?>