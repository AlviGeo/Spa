<html>
	<head>
		<title>Therapist1</title>
	</head>
	<body>
		<table>
			<tr>
				<td><b>Data Therapist1</td>
			<tr>
				<td><center>ID Therapist</td>
				<td><center>Nama Therapist</td>
			<tr>
			<?php
			include("koneksi.php");
			$no = 1;
			$query = mysql_query("select * from therapist");
			while($cat = mysql_fetch_array($query)){?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $cat['id_therapist'];?></td>
				<td><?php echo $cat['nama_therapist'];?></td>

				<td><b><a href ="edit_therapist.php?id=<?php echo $cat['id_therapist'];?>">EDIT</a>|
					<a href ="delete_therapist.php?id=<?php echo $cat['id_therapist'];?>"onClick="return confirm('Apakah Anda Yakin Ingin Dihapus?');">DELETE</a></td>
			<?php
			$no++;}?>
			</tr>
		</table>
		<a href=View.php>Back</a>
	</body>
</html>