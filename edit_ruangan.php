<html>
<head>
	<title>Edit Ruangan</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from ruangan where kode_ruang='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateRuangan.php method=POST>
		<table>
			<tr>
				<td>Kode Ruang</td>
				<td><input type=text name=kode_ruang value="<?php echo $data['kode_ruang'];?>"
				disabled="disabled"/><input type=hidden name=kode_ruang value="<?php echo $data ['kode_ruang'];?>"/></td>
			<tr>
			<tr>
				<td>Kode Ruang</td>
				<td><input type=text name=kode_ruang></td>
			</tr>
				<td>ID Therapist</td>
				<td>:</td>
				<td><input type=text name=id_therapist></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td><input type=text name=kode_servis></td>
			</tr>
				<td><center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>