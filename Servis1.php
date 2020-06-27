<html>
	<head>
		<title>Servis1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Servis1</td>
			<tr>
				<td><center>Kode Servis</td>
				<td><center>Jenis Servis</td>
				<td><center>Harga Servis</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from servis");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['kode_servis'];?></td>
				<td><?php echo $cat['jenis_servis'];?></td>
				<td><?php echo $cat['harga_servis'];?></td>

				<td><b><a href ="edit_servis.php?id=<?php echo $cat['kode_servis'];?>">EDIT</a>|
					<a href ="delete_servis.php?id=<?php echo $cat['kode_servis'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>