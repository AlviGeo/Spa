<html>
<head>
	<title>Edit Therapist</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from therapist where id_therapist='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateTherapist.php method=POST>
		<table>
			<tr>
				<td>Kode Therapist</td>
				<td><input type=text name=id_therapist value="<?php echo $data['id_therapist'];?>">
				<input type=hidden name=id_therapist value="<?php echo $data ['id_therapist'];?>"/></td></tr>
			<tr>
				<td>ID Therapist</td>
				<td><input type=text name=id_therapist></td>
			</tr>
			<tr>
				<td>Nama Therapist</td>
				<td><input type=text name=nama_therapist></td>
			</tr>
				<td><center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>