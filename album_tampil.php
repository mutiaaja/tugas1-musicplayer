<?php

include "app/album.php";

$album = new album();
$rows = $album->tampil();

?>
<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
<body>

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
			<h2>ALBUM</h2>
		</center>
		<center><a class="tambah" href="album_input.php">Tambah</a></center>
		<div class="main">
			<table>
				<table align="center">
					<tr>
						<td>No</td>
						<td>Artist</td>
						<td>Album Name</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php foreach ($rows as $row) { ?>
						<tr>
							<td><?php echo $row['album_id']; ?></td>
							<td><?php echo $row['artist_name']; ?></td>
							<td><?php echo $row['album_name']; ?></td>
							<td><a class="edit" href="album_edit.php?id=<?php echo $row['album_id']; ?>">Edit</a></td>
							<td><a onclick="return confirm('Are You Sure')" class="delete" href="album_proses.php?delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
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