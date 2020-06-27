<html>
<head>
	<title>Edit Fasilitas</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from fasilitas where kode_fasilitas='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateFasilitas.php method=POST>
		<table>
			<tr>
				<td>Kode Fasilitas</td>
				<td><input type=text name=kode_fasilitas value="<?php echo $data['kode_fasilitas'];?>"
				disabled="disabled"/><input type=hidden name=kode_fasilitas value="<?php echo $data ['kode_fasilitas'];?>"/></td>
			<tr>
				<td>Kode Ruang</td>
				<td>:</td>
				<td><input type=text name=kode_ruang></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td><input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>Jenis Fasilitas</td>
				<td><input type=text name=jenis_fasilitas></td>
			</tr>

				<td><center><input type=submit name=pr value=Proses></center></td>

			</tr>
		</table>
	</form>
</body>
</html>