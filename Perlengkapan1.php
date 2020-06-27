<html>
	<head>
		<title>Perlengkapan1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Perlengkapan1</td>
			<tr>
				<td><center>ID Perlengkapan</td>
				<td><center>Nama Perlengkapan</td>
				<td><center>ID Admin</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from perlengkapan");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['id_perlengkapan'];?></td>
				<td><?php echo $cat['nama_perlengkapan'];?></td>
				<td><?php echo $cat['id_admin'];?></td>

				<td><b><a href ="edit_perlengkapan.php?id=<?php echo $cat['id_perlengkapan'];?>">EDIT</a>|
					<a href ="delete_perlengkapan.php?id=<?php echo $cat['id_perlengkapan'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>