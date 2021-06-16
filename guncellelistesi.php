<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
    <title> | Randevu Güncelle |</title>

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

//sorguyu hazirliyoruz
$sql = "SELECT * FROM randevu ORDER BY tarih, saat";

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}

//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<h1>Randevu Güncelle</h1>";
echo "<table border=1 id='tablo'>";
echo "<tr>";
echo "<th>Randevu No</th>";
echo "<th>Adı</th>";
echo "<th>Soyadı</th>";
echo "<th>Telefonu</th>";
echo "<th>RandevuTarihi</th>";
echo "<th>RandevuSaati</th>";
echo "</tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelenlerle tablo satırları oluşturalım
  echo "<tr><td>".$gelen['randevuno']."</td>";
  echo "<td>".$gelen['musteriad']."</td>";
  echo "<td>".$gelen['musterisoyad']."</td>";
  echo "<td>".$gelen['telefon']."</td>";
  echo "<td>".$gelen['tarih']."</td>";
  echo "<td>".$gelen['saat']."</td>";
  echo "<td><a href=guncelle.php?id=";
  echo $gelen['randevuno'];
  echo ">Güncelle</a></td></tr>";    
}
// tablo kodunu bitirelim.
echo "</table>";



//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
      
  </div>
</div>

</body>
</html>


