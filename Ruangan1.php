<html>
	<head>
		<title>Ruangan1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Ruangan1</td>
			<tr>
				<td><center>Kode Ruang</td>
				<td><center>ID Therapist</td>
				<td><center>Kode Servis</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from ruangan");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['kode_ruang'];?></td>
				<td><?php echo $cat['id_therapist'];?></td>
				<td><?php echo $cat['kode_servis'];?></td>

				<td><b><a href ="edit_ruangan.php?id=<?php echo $cat['kode_ruang'];?>">EDIT</a>|
					<a href ="delete_ruangan.php?id=<?php echo $cat['kode_ruang'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>