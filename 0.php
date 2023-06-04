<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
<div id="popup">
		<div class="window">
			Website ini di khususkan untuk berumur 17 keatas<br>
	    <form method="post" action=""> 
	    berapa usia anda? <br> <input type="text" name="umur" /><br/>
	    <input type="submit" name="submit" value="Submit" /> 
	    </form> <hr class="hrr">

	<?php
	/*Perkondisian If Else*/
	if(isset($_POST['submit'])){ 
	$umur=$_POST['umur'];
	if ($umur<17)
	{
	   echo "<b>Maaf Situs Ini Tidak Bisa Di Kunjungi </b>";
	   echo "<img src=https://pbs.twimg.com/media/EWQM1qRUEAAEVdh.jpg width=40% heigth=auto>";
	}
	else 
	{
	    echo "Tekan Tombol Next Untuk Melanjutkan <br><br>";
	    echo "<button><a href=1.php class=qq>Next</a></button>"; 
	}
	}
	?>
	</div>
</div>
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
				<!-- kelompok 3
				Ricko Bayu L (19104410046)
				Mohammad Fahim Hidayatulloh (19104410052)
				Ubaidillah Irgananta Putra Mamba'ul Ulum (19104410050) -->

			<li>
				<a href="2.php" class="nav-link">Daftar Manga
				</a>
			</li>
			<li>
				<a href="info.php" class="nav-link">Tentang Kami</a>
			</li>
		</ul>
		<form method="get" action="2.php" style="width: 35%;display: flex;">
			<input type="search" placeholder="Search" class="form-control" style="border: transparent;background: #393E46; color: #EEEEEE;" >
		</form>
	</div>
</nav></br>
<div style="display: flex;" class="tengah-img">
	<img src="https://steamuserimages-a.akamaihd.net/ugc/947336408503279477/40406ADC106BFF3BFAB39A3CCD91C698BF11861E/" width="100%" height="auto">
</div><br><hr>
<div class="flex-container">
	<div><img src="https://www.manga-raw.club/media/manga_covers/image_8T7EAKZ.webp" width="100%" height="auto"></div>
	<div><img src="https://i1.wp.com/mangakita.net/wp-content/uploads/2019/01/209957-193x278.jpg" width="100%" height="auto"></div>
	<div><img src="https://i2.wp.com/mangakita.net/wp-content/uploads/2018/11/167639.jpg" width="100%" height="auto"></div>
	<div><img src="https://i1.wp.com/mangakita.net/wp-content/uploads/2015/04/OnePunchMan_manga_cover.png" width="100%" height="auto"></div>
	<div><img src="https://i3.wp.com/mangakita.net/wp-content/uploads/2018/12/210341.jpg" width="100%" height="auto"></div>
	<div><img src="https://i2.wp.com/mangakita.net/wp-content/uploads/2020/12/FP.png" width="100%" height="auto"></div>
	<div><img src="https://i0.wp.com/mangakita.net/wp-content/uploads/2015/10/012.jpg" width="100%" height="auto"></div>
</div><hr>
</body>
</html>