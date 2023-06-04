<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
$A = array("Ao no Exorcist","Ajin","Argate Online");
$B = array("Bersek","Blast","Btoom!");
$C = array("Charlotte","Crows:The After Math","Crows Zero 2");
$D = array("DanMachi","Death Note","Dr.Stone");
$E = array("Edens Zero","Exteme God");
$F = array("Fairy Tail","Fantastic Four","Fire Punch");
$G = array("Gantz","Gintama","Goblin Slayer");
$H = array("Haikyuu!!","Her Summon","Horimiya");
$I = array("Ichigo","Inuyasha");
$J = array("Jackals","Jitsu wa Watashi wa");
$K = array("Kaguya-sama","Kenja no Mago","Kuzu no Honkai");
$L = array("Lasboss x Hero","Live Dungeon","Lv999 no Murabito");
$M = array("Magi","Mahouka Koukou no Rettousei","Mob Psycho 100");
$N = array("Nanatsu no Taizai","Naruto Gaiden","No Game No Life");
$O = array("One Piece","One Punch Man","Overlord");
$P = array("Pantong","Plunderer");
$Q = array("Qin Xia","Queen With A Scalpel","Qye Sera, Sera");
$R = array("Radiant","Rebirth Of The Urban Immortal","Robot x Laserbean");
$S = array("Sakamoto Days","Shingeki no Kyojin","Shuumatsu no Valkyrie");
$T = array("Tales of Demons and Gods","Tenshura","Tokyo Ghoul");
$U = array("U19","UQ Holder","Uchi no Ko no Tame");
$V = array("Vigilante","Vinland Saga");
$W = array("World Trigger","Witch Watch","Worst");
$X = array("Xingkong Club","X-Ray Vision","X Epoch Of Dragon");
$Y = array("Yahabe","Yahari Ore no Seishun","Yari no Yuusha");
$Z = array("Zai x 10","Zipman!!","Zui Wu Dao");

$huruf = array("<a href=1.php class=abjad>Q</a>","<a href=1.php class=abjad>W</a>","<a href=1.php class=abjad>E</a>","<a href=1.php class=abjad>R</a>","<a href=1.php class=abjad>T</a>","<a href=1.php class=abjad>Y</a>","<a href=1.php class=abjad>U</a>","<a href=1.php class=abjad>I</a>","<a href=1.php class=abjad>O</a>","<a href=1.php class=abjad>P</a>","<a href=1.php class=abjad>A</a>","<a href=1.php class=abjad>S</a>","<a href=1.php class=abjad>D</a>","<a href=1.php class=abjad>F</a>","<a href=1.php class=abjad>G</a>","<a href=1.php class=abjad>H</a>","<a href=1.php class=abjad>J</a>","<a href=1.php class=abjad>K</a>","<a href=1.php class=abjad>L</a>","<a href=1.php class=abjad>Z</a>","<a href=1.php class=abjad>X</a>","<a href=1.php class=abjad>C</a>","<a href=1.php class=abjad>V</a>","<a href=1.php class=abjad>B</a>","<a href=1.php class=abjad>N</a>","<a href=1.php class=abjad>M</a>");
/*for ($ii=0; $ii < count($huruf) ; $ii++) {
}*/?>
<div class="flex-container">
<?php
/* Array pemanggilan $huruf sekaligus mengsortirkan mulai dari 0, lalu dilakukan perulangan dari for $ii yang artinya $ii = $huruf, karena $ii++ maka setiap perulangan bertambah 1, jadi mulai dari 0=A, 1=B, 2=C dst */
sort($huruf);
for ($ii=0; $ii < count($huruf) ; $ii++) { 
	
	echo "<div>$huruf[$ii]</div>";/*jika bagian ini dirubah menjadi salah satu angka, maka akan mengulang huruf yang sama yang tertera pada array $huruf tersebut, maka dari itu di ubah menjadi $ii untuk setiap kali berganti uruh karena bertambahnya angka dan mengulang terus*/
}
?>
</div><hr><br>
<table class="aw" cellpadding="15px" width="85%" cellspacing="5px" border="0">
	<tr>
		<?php echo"<td><b>A</b><hr><br>";
		foreach ($A as $value) {
		echo "$value<br>";
		};
		echo"<td><b>B</b><hr><br>";
		foreach ($B as $value) {
		echo "$value<br>";
		};
		echo"<td><b>C</b><hr><br>";
		foreach ($C as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>D</b><hr><br>";
		foreach ($D as $value) {
		echo "$value<br>";
		};
		echo"<td><b>E</b><hr><br>";
		foreach ($E as $value) {
		echo "$value<br>";
		};
		echo"<td><b>F</b><hr><br>";
		foreach ($F as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>G</b><hr><br>";
		foreach ($G as $value) {
		echo "$value<br>";
		};
		echo"<td><b>H</b><hr><br>";
		foreach ($H as $value) {
		echo "$value<br>";
		};
		echo"<td><b>I</b><hr><br>";
		foreach ($I as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>J</b><hr><br>";
		foreach ($J as $value) {
		echo "$value<br>";
		};
		echo"<td><b>K</b><hr><br>";
		foreach ($K as $value) {
		echo "$value<br>";
		};
		echo"<td><b>L</b><hr><br>";
		foreach ($L as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>M</b><hr><br>";
		foreach ($M as $value) {
		echo "$value<br>";
		};
		echo"<td><b>N</b><hr><br>";
		foreach ($N as $value) {
		echo "$value<br>";
		};
		echo"<td><b>O</b><hr><br>";
		foreach ($O as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>P</b><hr><br>";
		foreach ($P as $value) {
		echo "$value<br>";
		};
		echo"<td><b>Q</b><hr><br>";
		foreach ($Q as $value) {
		echo "$value<br>";
		};
		echo"<td><b>R</b><hr><br>";
		foreach ($R as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>S</b><hr><br>";
		foreach ($S as $value) {
		echo "$value<br>";
		};
		echo"<td><b>T</b><hr><br>";
		foreach ($T as $value) {
		echo "$value<br>";
		};
		echo"<td><b>U</b><hr><br>";
		foreach ($U as $value) {
		echo "$value<br>";
		};?>
	</tr>
		<!-- kelompok 3
		Ricko Bayu L (19104410046)
		Mohammad Fahim Hidayatulloh (19104410052)
		Ubaidillah Irgananta Putra Mamba'ul Ulum (19104410050) -->

	<tr>
		<?php echo"<td><b>V</b><hr><br>";
		foreach ($V as $value) {
		echo "$value<br>";
		};
		echo"<td><b>W</b><hr><br>";
		foreach ($W as $value) {
		echo "$value<br>";
		};
		echo"<td><b>X</b><hr><br>";
		foreach ($X as $value) {
		echo "$value<br>";
		};?>
	</tr>
	<tr>
		<?php echo"<td><b>Y</b><hr><br>";
		foreach ($Y as $value) {
		echo "$value<br>";
		};
		echo"<td><b>Z</b><hr><br>";
		foreach ($Z as $value) {
		echo "$value<br>";
		};?>
	</tr>
</table>
</body>
</html>