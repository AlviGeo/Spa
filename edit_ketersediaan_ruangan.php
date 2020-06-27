<html>
<head>
	<title>Edit Ketersediaan Ruangan</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from ketersediaan_ruangan where jumlah_ruangan_tersedia='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateKetersediaanRuangan.php method=POST>
		<table>
			<tr>
				<td>Kode Admin</td>
				<td><input type=text name=jumlah_ruangan_tersedia value="<?php echo $data['jumlah_ruangan_tersedia'];?>"
				disabled="disabled"/><input type=hidden name=jumlah_ruangan_tersedia value="<?php echo $data ['jumlah_ruangan_tersedia'];?>"/></td>

			<tr>
				<td>Jumlah Ruangan Tersedia</td>
				<td>:</td>
				<td><input type=text name=jumlah_ruangan_tersedia></td>
			</tr>
			<tr>
				<td>Kode Ruang</td>
				<td><input type=text name=kode_ruang></td>
			</tr>
			<tr>
				<td>Total Ruangan Disediakan</td>
				<td><input type=text name=total_ruangan_disediakan></td>
			</tr>
			<tr>
				<td>ID Admin</td>
				<td><input type=text name=id_admin></td>
			</tr>

				<td><center><input type=submit name=pr value=Proses></center></td>

			</tr>
		</table>
	</form>
</body>
</html>