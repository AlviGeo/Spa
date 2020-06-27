<html>
<head>
	<title>Edit Booking</title>
</head>
<body>
<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from booking where KD_Sales='$id'");
$data = mysql_fetch_array($query);
?>
	<form action= updateBooking1.php method=POST>
		<table>
			<tr>
				<td>Kode Booking</td>
				<td><input type=text name=KD_Sales value="<?php echo $data['KD_Sales'];?>"
				disabled="disabled"/><input type=hidden name=KD_Sales value="<?php echo $data ['KD_Sales'];?>"/></td>
			<tr>
				<td>ID Pelanggan</td>
				<td>:</td>
				<td><input type=text name=id_pelanggan></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td><input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>Tanggal Booking</td>
				<td><input type=date name=tanggal_booking></td>
			</tr>
			<tr>
				<td>Waktu Booking</td>
				<td><input type=time name=waktu_booking></td>
			</tr>

				<td><center><input type=submit name=pr value=Proses></center></td>

			</tr>
		</table>
	</form>
</body>
</html>