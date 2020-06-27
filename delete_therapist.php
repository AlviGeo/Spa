<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from therapist where id_therapist='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Therapist.php';</script>";}

?>