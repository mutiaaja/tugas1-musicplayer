<?php

include "app/artist.php";

$id = $_GET['id'];

$artis = new artist();
$row = $artis->edit($id);

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
			<h2>ARTIST EDIT</h2>
		</center>
		<form method="POST" action="artist_proses.php">
			<input type="hidden" name="artist_id" value="<?php echo $id; ?>">
			<table align="center">
				<tr>
					<td>Artist Name</td>
					<td><input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn-edit" value="UPDATE"></td>
				</tr>
			</table>
		</form>