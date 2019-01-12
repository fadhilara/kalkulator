<html>
<head>
<title>Kalkulator Sederhana</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="header"> 
		<img class="img-responsive" src="calcu.jpg" position="absolute" left="400px" width="50px" height="50px">
		<center> <b>ID Kalkulator</b> <br>	Praktis Menghitung </center> </div>
 <div id="cssmenu">
        <ul>
                  <li class='active '><strong><a href='index.php'><span>Home</span></a></strong></li>
                   <li class='has-sub '><strong><a href='#'><span>Matematika</span></a></strong>
                     <ul>
                       <li><a href="phytagoras.php">Phytagoras</a></li>
                       <li><a href="sudut_lingkaran.php">Sudut Lingkaran</a></li>
                     </ul>
                     </li>
                  <li class='has-sub '><strong><a href='#'><span>Fisika</span></a></strong>
                      <ul>
                        <li><a href="glb.php">GLB</a></li>
                        <li><a href='usaha.php'><span>Usaha</span></a>
                        </li>
                      </ul>
                   </li>
                   <li class='has-sub '><strong><a href='#'><span>Kimia</span></a></strong>
                     <ul>
                       <li><a href="molaritas.php">Molaritas</a></li>
                       <li><a href="derajat_disosiasi.php">Derajat Disosiasi</a></li>
                     </ul>
                   </li>
                   <li class='has-sub '><strong><a href='#'><span>Konversi</span></a></strong>
                     <ul>
                       <li><a href="suhu.php">Suhu</a></li>
                       <li><a href="waktu.php">Waktu</a></li>
                     </ul>
                    </li>
                     <li class='has-sub '><strong><a href='#'><span>Kesehatan</span></a></strong>
                     <ul>
                       <li><a href="bmi.php">BMI</a></li>
                       
                     </ul>
                     </li>
                  </ul>
     </div>
  </body>
<?php
$bil1 = isset($_POST['bil1']) ? $_POST['bil1'] : NULL;
$bil2 = isset($_POST['bil2']) ? $_POST['bil2'] : NULL;
$hasil = isset($hasil);

if(isset($_POST['tambah'])){
$hasil = $bil1+$bil2;
}

if(isset($_POST['kurang'])){
$hasil = $bil1-$bil2;	
}

if(isset($_POST['kali'])){
$hasil = $bil1*$bil2;
}

if(isset($_POST['bagi'])){
$hasil = $bil1/$bil2;
}

if(isset($_POST['clear'])){
$hasil='';
$bil1='';
$bil2='';
}

if(isset($_POST['sqrt'])){
$hasil=sqrt($bil1);

}

if(isset($_POST['^2'])){
$hasil=($bil1*$bil1);
}

if(isset($_POST['%'])){
$hasil=($bil1*$bil2)/100;
}

if(isset($_POST['1/x'])){
$hasil=(1/$bil1);
}

echo 
'<div class="panel">'.
'<form action="" method="post">'.
'<div align="center"><b>   KALKULATOR SEDERHANA    </b></div>'.



'Bilangan Ke-1:<br/>'.
'<input type="text" name="bil1" value="'.$bil1.'"/><br/>'.
'Bilangan Ke-2:<br/>'.
'<input type="text" name="bil2" value="'.$bil2.'"/><br/>'.
'<br/><input class="tombol" type="submit" name="tambah" value="+"/>'.
'<input class="tombol" type="submit" name="kurang" value="-"/>'.
'<input class="tombol" type="submit" name="kali" value="X"/>'.
'<input class="tombol" type="submit" name="bagi" value=":"/>'.
'<INPUT class="tombol" type="submit" name="clear" value="C"/>'.
'<input class="tombol" type="submit" name="sqrt" value="sqrt"/>'.
'<input class="tombol" type="submit" name="^2" value="^2"/>'.
'<input class="tombol" type="submit" name="%" value="%"/>'.
'<input class="tombol" type="submit" name="1/x" value="1/X"/><br/>'.

'</form>'.
'Hasil:<br/>'.
'<input type="text" value="'.$hasil.'" readonly/><br/>'.
'</div>';
'</div>';
'</div>';
?><br/><br/><br/><br/><br/>
<div class="footer">
			<center> Copyright &copy; 2019 ID Kalkulator </center>
		</div>
</body>
</html>