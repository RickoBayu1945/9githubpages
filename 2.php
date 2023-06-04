<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="2.css">
</head>
<body>
<nav class="a b c d" style="background: rgba(34, 40, 49 /*,0.25*/);">
	
	<div class="e">
		<a href="1.php" class="logo">
			<img src="new.png" class="img-fluid">
		</a>
		<ul class="navbar-nav mr-auto">
			<li>
				<a href="1.php" class="nav-link">
				Home
				</a>
			</li>
			<li>
				<a href="2.php" class="nav-link">Daftar Manga
				</a>
			</li>
			<!-- kelompok 3
			Ricko Bayu L (19104410046)
			Mohammad Fahim Hidayatulloh (19104410052)
			Ubaidillah Irgananta Putra Mamba'ul Ulum (19104410050) -->

			<li>
				<a href="info.php" class="nav-link">Tentang Kami</a>
			</li>
		</ul>
		<form method="get" action="2.php" style="width: 35%;display: flex;">
			<input type="search" placeholder="Search" class="form-control" style="border: transparent;background: #393E46; color: #EEEEEE;" >
			<input type="hidden" name="post_type" value="anime">
		</form>
	</div>
</nav></br>
<?php include "2b.php"; ?>
</body>
</html>