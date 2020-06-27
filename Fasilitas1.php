<html>
	<head>
		<title>Fasilitas1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Fasilitas1</td>
			<tr>
				<td><center>Kode Fasilitas</td>
				<td><center>Kode Ruang</td>
				<td><center>Kode Servis</td>
				<td><center>Jenis Fasilitas</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from fasilitas");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['kode_fasilitas'];?></td>
				<td><?php echo $cat['kode_ruang'];?></td>
				<td><?php echo $cat['kode_servis'];?></td>
				<td><?php echo $cat['jenis_fasilitas'];?></td>

				<td><b><a href ="edit_fasilitas.php?id=<?php echo $cat['kode_fasilitas'];?>">EDIT</a>|
					<a href ="delete_fasilitas.php?id=<?php echo $cat['kode_fasilitas'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>