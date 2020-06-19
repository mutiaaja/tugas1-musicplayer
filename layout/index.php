<!DOCTYPE html>
<html>

<head>
	<title>UTS</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>

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
				<a href="logout.php">LogOut</a>

			</div>
		</center>

		<div class="main">

			<?php

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}
			?>
		</div>

		<div>
		<!-- footer -->
		<?php include "footer.php" ?>
	</div>
	</div>
</body>

</html>