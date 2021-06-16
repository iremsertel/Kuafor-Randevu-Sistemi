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

//sorguyu hazirliyoruz
$sql = "SELECT * FROM randevu WHERE randevuno=".$_GET['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}


//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
    <title> | Randevu Güncelleme |</title>
</head>
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
  
  <form  class="form" action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" method="POST">
  <h1>Randevu Bilgilerini Güncelle </h1><br />
        Adı: &nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="musteriad" value="<?php echo $gelen['musteriad']?>" />    <br />
        Soyadı:
             <input type="text" name="musterisoyad" value="<?php echo $gelen['musterisoyad'] ?>" /> <br />
        Telefon:
         <input type="text" name="telefon" value="<?php echo $gelen['telefon'] ?>" /> <br />
        Tarih  : &nbsp;&nbsp;
         <input type="text" name="tarih" value="<?php echo $gelen['tarih'] ?>" />  <br />
        Saat  : &nbsp;&nbsp;
        <input type="text" name="saat" value="<?php echo $gelen['saat'] ?>" />  <br /><br /> <br /><br />
        <input class="bttn" type="submit" value="Kaydet"/>

  </form>
  </div>
</div>

</body>
</html>