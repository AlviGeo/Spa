<html>
<head>
	<title>Ketersediaan Ruangan</title>
</head>
<body>
	<form method=POST action=sc_form_ketersediaan_ruangan.php>
		<table>
			<tr>
				<td>Jumlah Ruangan Tersedia</td>
				<td>:</td>
				<td><input type=text name=jumlah_ruangan_tersedia></td>
			</tr>
			<tr>
				<td>Kode Ruang</td>
				<td>:</td>
				<td><input type=text name=kode_ruang></td>
			</tr>
			<tr>
				<td>Total Ruangan Disediakan</td>
				<td>:</td>
				<td><input type=text name=total_ruang_disediakan></td>
			</tr>
			<tr>
				<td>Id Admin</td>
				<td>:</td>
				<td><input type=text name=id_admin></td>
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