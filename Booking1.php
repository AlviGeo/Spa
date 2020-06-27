<html>
	<head>
		<title>Booking1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Booking1</td>
			<tr>
				<td><center>Kode Booking</td>
				<td><center>ID Pelanggan</td>
				<td><center>Kode Servis</td>
				<td><center>tanggal Booking</td>
				<td><center>Waktu Booking</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from booking");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['kode_booking'];?></td>
				<td><?php echo $cat['id_pelanggan'];?></td>
				<td><?php echo $cat['kode_servis'];?></td>
				<td><?php echo $cat['tanggal_booking'];?></td>
				<td><?php echo $cat['waktu_booking'];?></td>

				<td><b><a href ="edit_Booking.php?id=<?php echo $cat['kode_booking'];?>">EDIT</a>|
					<a href ="delete_Booking.php?id=<?php echo $cat['kode_booking'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=Booking.php>Back</a>
	</body>
</html>