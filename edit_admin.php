<html>
<head>
	<title>Edit Admin</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from admin where id_admin='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateAdmin1.php method=POST>
		<table>
			<tr>
				<td>Kode Admin</td>
				<td><input type=text name=id_admin value="<?php echo $data['id_admin'];?>"
				disabled="disabled"/><input type=hidden name=id_admin value="<?php echo $data ['id_admin'];?>"/></td>
			<tr>
				<td>ID Admin</td>
				<td>:</td>
				<td><input type=text name=id_admin></td>
			</tr>
			<tr>
				<td>Nama Admin</td>
				<td><input type=text name=name_admin></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type=text name=password></td>
			</tr>
				<td><center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>