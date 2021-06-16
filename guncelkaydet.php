<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
   <title> | Randevu Güncellendi |</title>
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

//degiskenleri formdan aliyoruz
extract($_POST);

//sorguyu hazirliyoruz
$sql ="UPDATE randevu ".
      "SET musteriad='$musteriad',musterisoyad='$musterisoyad',telefon='$telefon',tarih='$tarih',saat='$saat' ".
      "WHERE randevuno=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "<p class='yazi'> Randevu Bilgileri Güncellendi.</p>";
    echo " <p class='yazi'><a  href='guncellelistesi.php'> Listele</a></p>\n";
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
  </div>
</div>






</body>
</html>



