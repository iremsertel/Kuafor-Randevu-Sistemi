<?php

// oturumu baslat
session_start();
//eger username adli oturum degiskeni yok ise login sayfasina yönlendir
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit();
}

//mysql baglanti kodunu ekliyoruz 
include("mysqlbaglan.php");

if (!empty($_POST["musteriad"]) && !empty($_POST["musterisoyad"]) && !empty($_POST["telefon"]) && !empty($_POST["tarih"]) && !empty($_POST["saat"])) {
   //degiskenleri formdan aliyoruz
if (isset($_POST["musteriad"],$_POST["musterisoyad"],$_POST["telefon"],$_POST["tarih"],
$_POST["saat"])) {
    
$musteriad=$_POST['musteriad'];
$musterisoyad=$_POST['musterisoyad'];
$telefon=$_POST['telefon'];
$tarih=$_POST['tarih'];
$saat=$_POST['saat'];




//sorguyu hazirliyoruz
$sql = "INSERT INTO randevu ".
       "(musteriad,musterisoyad,telefon,tarih,saat) ".
       "VALUES ( '$musteriad','$musterisoyad', '$telefon', '$tarih', '$saat')";
	   

echo "<br/>";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
   $mesaj = "<h1>Randevu eklendi</h1>";
    
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
}
}

?>

<html>
   <!-- türkçe karakter desteği ayarı --> 
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
      <title> | Randevu Gir |</title>
   <body>
   <div class="header">
   <h2><a class="h_2" href="anasayfa.php">Aurora Kuaför</a></h2>
  
</div>

<div class="row">
  <div class="side">
  <h1 class="h_1">Randevu Sistemi </h1><br /><br />
      <div >
         <ul>
         <li><a href="_register.php"> Admin Ekle </a><br />
         <li><a href="kayitformu.php"> Randevu Gir </a><br />
         <li><a href="listele.php"> Randevuları Listele </a><br />
         <li><a href="silmelistesi.php"> Randevu Sil </a><br />
         <li><a href="guncellelistesi.php"> Randevu Güncelle </a><br />
         <li><a href='_logout.php'>Oturumu Kapat</a> 
         <ul>
      </div>
  </div>


  <div class="main">
  
  <form class="form" action="<?php $_PHP_SELF ?>" method="POST"> 
  <h1> Randevu Bilgilerini Girme </h1> <br /> <br /> 
         Adı   : &nbsp; &nbsp; &nbsp; <input type="text" name="musteriad" />    <br /> 
         Soyadı:  &nbsp;<input type="text" name="musterisoyad" /> <br /> 
         Telefon : <input type="text" name="telefon" /> <br />
         Tarih :  &nbsp; &nbsp;<input type="date" name="tarih" value="0000-00-00" /> <br /> 
         Saat  :  &nbsp; &nbsp;<input type="text" name="saat" />  <br />  <br />  <br /> 
         <input class="bttn" type="submit" value="Kaydet"/> 

         <?php 
         //mesaj varsa ekrana yazdır. 
         
         if (isset($mesaj)) echo $mesaj; ?> 

      </form>
      
  </div>
</div>
   </body>
</html>







