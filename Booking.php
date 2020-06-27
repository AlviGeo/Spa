<html>
<head>
	<title>Booking</title>
</head>
<body>
	<form method=POST action=sc_form_booking.php>
		<table>
			<tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><input type=text name=kode_booking></td>
			</tr>
			<tr>
				<td>Id Pelanggan</td>
				<td>:</td>
				<td><input type=text name=id_pelanggan></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td>:</td>
				<td><input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>Tanggal Booking</td>
				<td>:</td>
				<td><input type=date name=tanggal_booking></td>
			</tr>
			<tr>
				<td>Waktu Booking</td>
				<td>:</td>
				<td><input type=time name=waktu_booking></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type=submit name=PR value=Proses></td>
			</tr>
		</table>
	</form>
<a href=Create.php>Back</a>
</body>
</html>