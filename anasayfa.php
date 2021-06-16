<?php
// oturumu baslat
session_start();
//eger username adli oturum degiskeni yok ise login sayfasina yönlendir
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit();
}

?>


<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
   <title> | Anasayfa |</title>
   </head>
<body>

<div class="header">
 <h2>Aurora Kuaför</h2>
  
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
    <br /><br /><br />
    <h1>Hakkında</h1>
    <h3>Bu sistem randevu almayı kolaylaştıran ve randevu bilgilerini düzenli olarak görebilmemizi sağlayan bir sistemdir.Müşterilerimiz bize ulaşıp randevu almak istediklerinde
    müşteri bilgilerini alıp kaydedebiliyoruz. Bunun yanı sıra randevu tarihi ve saatini de sistemde tarih ve saate göre sıralanmış randevu bilgilerine bakarak daha kolay bir iletişim sağlayarak
    uygun zamana ayarlayabiliyoruz. </h3>
    <h4>Müşteriler için online randevu alma sistemi değildir! Kuaför salonları için randevu alımı ve randevu bilgilerini güncellemek ve görebilmek için
     tasarlanmış bir sistemdir.Randevular, telefon numaramız üzerinden bize ulaşan müşterilemize uygun tarihte ve saatte çalışanlarımız tarafından verilir. </h4>
  
    <br>
    <h1>İletişim Bilgileri</h1>
    <h5>İrem Sertel</h5>
    <h6>Proje Detayları İçin:</h6>
    
    
    <a href="https://github.com/iremsertel/Kuafor-Randevu-Sistemi"><img class="img1" src="github1.jpg" alt="Örnek" >
    
    
     
    
    
  </div>
</div>






</body>
</html>



