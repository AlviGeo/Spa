<html>
<head>
	<title>Pembayaran</title>
</head>
<body>
	<form method=POST action=sc_form_pembayaran.php>
		<table>
			<tr>
				<td>ID Pembayaran</td>
				<td>:</td>
				<td><input type=text name=id_pembayaran></td>
			</tr>
			<tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><input type=text name=kode_booking></td>
			</tr>
			<tr>
				<td>Kode Servis</td>
				<td>:</td>
				<td><input type=text name=kode_servis></td>
			</tr>
			<tr>
				<td>ID Pelanggan</td>
				<td>:</td>
				<td><input type=text name=id_pelanggan></td>
			</tr>
			<tr>
				<td>Deskripsi Pembayaran</td>
				<td>:</td>
				<td><input type=text name=deskripsi_pembayaran></td>
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