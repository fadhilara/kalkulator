<html>
<head>
<title>Kalkulator Sederhana</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="header"> 
    <img class="img-responsive" src="calcu.jpg" position="absolute" left="400px" width="50px" height="50px">
    <center> <b>ID Kalkulator</b> <br>  Praktis Menghitung </center> </div>
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
$c = isset($_POST['c']) ? $_POST['c'] : NULL;
$hasil = isset($hasil);



if(isset($_POST['f'])){
$hasil = (9/5)*$c+32;
}

if(isset($_POST['k'])){
$hasil = $c+273;
}

if(isset($_POST['r'])){
$hasil = (4/5)*$c;
}

if(isset($_POST['clear'])){
$hasil='';
$c='';

}


echo 
'<div class="panel">'.
'<form action="" method="post">'.
'<div align="center"><b>   KALKULATOR KONVERSI SUHU    </b></div>'.
'<div align="center"><img src="suhu.png" width="150px" height="150px"> </div>'.


'Celcius:<br/>'.
'<input type="text" name="c" value="'.$c.'"/>'.
'<br/><input class="tombol" type="submit" name="f" value="Fahrenheit"/>'.
'<input class="tombol" type="submit" name="k" value="Kelvin"/>'.
'<input class="tombol" type="submit" name="r" value="Reamur"/>'.





'<br/>Hasil:<br/>'.
'<input type="text" value="'.$hasil.'" readonly/>'.
'<INPUT class="tombol" type="submit" name="clear" value="Reset"/>'.
'</form>'.
'</div>';
'</div>';
'</div>';
?><br/><br/><br/><br/><br/>
<div class="footer">
      <center> Copyright &copy; 2019 ID Kalkulator </center>
    </div>
</body>
</html>