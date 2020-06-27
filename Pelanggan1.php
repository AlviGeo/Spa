<html>
	<head>
		<title>Pelanggan1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Pelanggan1</td>
			<tr>
				<td><center>ID Pelanggan</td>
				<td><center>Nama Pelanggan</td>
				<td><center>No. Telepon</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from pelanggan");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['id_pelanggan'];?></td>
				<td><?php echo $cat['nama_pelanggan'];?></td>
				<td><?php echo $cat['no_tep'];?></td>

				<td><b><a href ="edit_pelanggan.php?id=<?php echo $cat['id_pelanggan'];?>">EDIT</a>|
					<a href ="delete_fasilitas.php?id=<?php echo $cat['id_pelanggan'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>