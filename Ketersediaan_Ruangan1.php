<html>
	<head>
		<title>Ketersediaan Ruangan1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Ketersediaan Ruangan1</td>
			<tr>
				<td><center>Jumlah Ruang Tersedia</td>
				<td><center>Kode Ruang</td>
				<td><center>Total Ruangan Disediakan</td>
				<td><center>ID Admin</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from ketersediaan_ruangan");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['jumlah_ruangan_tersedia'];?></td>
				<td><?php echo $cat['kode_ruang'];?></td>
				<td><?php echo $cat['total_ruangan_disediakan'];?></td>
				<td><?php echo $cat['id_admin'];?></td>

				<td><b><a href ="edit_ketersediaan_ruangan.php?id=<?php echo $cat['jumlah_ruangan_tersedia'];?>">EDIT</a>|
					<a href ="delete_ketersediaan_ruangan.php?id=<?php echo $cat['jumlah_ruangan_tersedia'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>