<html>
<head>
	<title>Edit Pembayaran</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from pembayaran where id_pembayaran='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updatePembayaran.php method=POST>
		<table>
			
			<tr>
				<td>ID Pembayaran</td>
				<td>: <input type=text name=id_pembayaran></td>
			</tr>
			<tr>
				<td>Kode Booking</td>
				<td>: <input type=text name=kode_booking></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td>: <input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>ID Pelanggan</td>
				<td>: <input type=text name=id_pelanggan></td>
			</tr>
			<tr>
				<td>Deskripsi Pembayaran</td>
				<td>: <input type=text name=deskripsi_pembayaran></td>
			</tr>
				<td>
				<br>
				<center><input type=submit name=pr value=Proses></center></td>
			</tr>
		</table>
	</form>
</body>
</html>