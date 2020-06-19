<?php

include "app/played.php";

$playd = new Played();
$rows = $playd->tampil();

?>

<body>
<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
	<div class="container">
		<div class="header">
			<center><img src="layout/assets/image/iconmusic.jpeg"></center>
		</div>

		<center>
			<div class="menu">
				<a href="index.php">Home</a>
				<a href="artist_tampil.php">Artist</a>
				<a href="album_tampil.php">Album</a>
				<a href="track_tampil.php">Track</a>
				<a href="played_tampil.php">Played</a>
				<a href="logout.php">Logout</a>

			</div>
		</center>
		<center>
			<h2>PLAYED</h2>
		</center>
		<center><a class="tambah" href="played_input.php">Tambah</a></center>
		<div class="main">

			<table>
				<table align="center">
					<tr>
						<td>No</td>
						<td>Artis</td>
						<td>Album</td>
						<td>Track</td>
						<td>Played</td>
						<td>EDIT</td>
						<td>DELETE</td>
					</tr>
					<?php foreach ($rows as $row) { ?>
						<tr>
							<td><?php echo $row['played_id']; ?></td>
							<td><?php echo $row['artist_name']; ?></td>
							<td><?php echo $row['album_name']; ?></td>
							<td><?php echo $row['track_name']; ?></td>
							<td><?php echo $row['played']; ?></td>
							<td><a class="edit" href="played_edit.php?id=<?php echo $row['played_id']; ?>">Edit</a></td>
							<td><a onclick="return confirm('Are You Sure')" class="delete" href="played_proses.php?delete-id=<?php echo $row['played_id']; ?>">Delete</a></td>
						</tr>
					<?php } ?>
				</table>
		</div>
		<div>
		<!-- footer -->
		<?php include "footer.php" ?>
	</div>
	</div>
</body>