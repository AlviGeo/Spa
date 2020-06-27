<html>
<head>
	<title>Edit Servis</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from servis where kode_servis='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateServis.php method=POST>
		<table>
			<tr>
				<td>Kode Servis</td>
				<td><input type=text name=kode_servis value="<?php echo $data['kode_servis'];?>"
				disabled="disabled"/><input type=hidden name=kode_servis value="<?php echo $data ['kode_servis'];?>"/></td>
			<tr>
				<td>Kode Servis</td>
				<td>:</td>
				<td><input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>Jenis Servis</td>
				<td><input type=text name=jenis_servis></td>
			</tr>
			<tr>
				<td>Harga Servis</td>
				<td><input type=text name=harga_servis></td>
			</tr>
				<td><center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>