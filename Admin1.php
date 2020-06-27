<html>
	<head>
		<title>Admin1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Admin1</td>
			<tr>
				<td><center>ID Admin</td>
				<td><center>Nama Admin</td>
				<td><center>Password</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from admin");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['id_admin'];?></td>
				<td><?php echo $cat['name_admin'];?></td>
				<td><?php echo $cat['password'];?></td>

				<td><b><a href ="edit_admin.php?id=<?php echo $cat['id_admin'];?>">EDIT</a>|
					<a href ="delete_admin.php?id=<?php echo $cat['id_admin'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>