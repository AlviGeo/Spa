<html>
<head>
	<title>Edit Perlengkapan</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from perlengkapan where id_perlengkapan='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updatePerlengkapan.php method=POST>
		<table>
			<tr>
				<td>Kode Perlengkapan</td>
				<td><input type=text name=id_perlengkapan value="<?php echo $data['id_perlengkapan'];?>"
				disabled="disabled"/><input type=hidden name=id_perlengkapan value="<?php echo $data ['id_perlengkapan'];?>"/></td>
			<tr>
				<td>ID Perlengkapan</td>
				<td>:</td>
				<td><input type=text name=id_perlengkapan></td>
			</tr>
			<tr>
				<td>Nama Perlengkapan</td>
				<td><input type=text name=nama_perlengkapan></td>
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