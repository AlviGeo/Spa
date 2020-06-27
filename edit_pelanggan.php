<html>
<head>
	<title>Edit Pelanggan</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from pelanggan where id_pelanggan='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updatePelanggan.php method=POST>
		<table>
			<tr>
				<td>Kode Pelanggan</td>
				<td><input type=text name=id_pelanggan value="<?php echo $data['id_pelanggan'];?>"
				disabled="disabled"/><input type=hidden name=id_pelanggan value="<?php echo $data ['id_pelanggan'];?>"/></td>

			<tr>
				<td>ID Pelanggan</td>
				<td>:</td>
				<td><input type=text name=id_pelanggan></td>
			</tr>
			<tr>
				<td>Nama Pelanggan</td>
				<td><input type=text name=nama_pelanggan></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type=text name=no_tep></td>
			</tr>

				<td><center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>