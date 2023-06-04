<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #008CBA;
  border-radius: .55em;
}
.qq{
		text-decoration: none;
		color: white;

}
#popup {
width: 100%;
height: 100%;
position: fixed;
background: rgba(0,0,0,.7);
top: 0;
left: 0;
z-index: 9999;
visibility: visible;
}

.window {
width: 400px;
height: 230px;
background: #fff;
border-radius: 10px;
position: relative;
padding: 10px;
box-shadow: 0 0 5px rgba(0,0,0,.4);
text-align: center;
margin: 15% auto;
}
	</style>
</head>
<body>
<div id="popup">
	<div class="window">
		Website ini di khususkan untuk berumur 17 keatas<br>
    <form method="post" action=""> 
    berapa usia anda? <br> <input type="text" name="umur" /><br /><br>
    <input type="submit" name="submit" value="Submit" /> 
    </form> <hr>

<?php
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
    echo "<button><a href=qq.php class=qq>Next</a></button>"; 
}
}
?>
	</div>
</div>

</body>
</html>