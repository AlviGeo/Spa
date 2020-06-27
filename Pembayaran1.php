<html>
	<head>
		<title>Pembayaran1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Pembayaran1</td>
			<tr>
				<td><center>ID Pembayaran</td>
				<td><center>Kode Booking</td>
				<td><center>Kode Servis</td>
				<td><center>ID Pelanggan</td>
				<td><center>Deskripsi Pembayaran</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from pembayaran");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['id_pembayaran'];?></td>
				<td><?php echo $cat['kode_booking'];?></td>
				<td><?php echo $cat['kode_servis'];?></td>
				<td><?php echo $cat['id_pelanggan'];?></td>
				<td><?php echo $cat['deskripsi_pembayaran'];?></td>

				<td><b><a href ="edit_pembayaran.php?id=<?php echo $cat['id_pembayaran'];?>">EDIT</a>|
					<a href ="delete_pembayaran.php?id=<?php echo $cat['id_pembayaran'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>