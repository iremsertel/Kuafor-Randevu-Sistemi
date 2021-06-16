<?php 

// oturumu baslat
session_start();
//eger username adli oturum degiskeni yok ise login sayfasina yönlendir
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit();
}

   require ('mysqlbaglan.php'); 
   
   if (isset($_POST['username']) && isset($_POST['password'])){ 
   
    extract($_POST); 
   
    // sifre metni SHA256 ile şifreleniyor. 
   
    $password = hash('sha256', $password); 
   
        
   
    $sql="INSERT INTO `kullanici` (kullaniciadi, sifre)"; 
   
    $sql = $sql . "VALUES ('$username', '$password')"; 
   
        
   
       $cevap = mysqli_query($baglanti, $sql); 
   
       if ($cevap){ 
   
           $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>"; 
   
       }else{ 
   
           $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>"; 
   
       } 
   
   } 
   
   ?> 
<html>
<head>
   <!-- türkçe karakter desteği ayarı --> 
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
   <title> | Admin Ekle |</title>
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
  <form class="form" action="<?php $_PHP_SELF ?>" method="POST"> 
  <h1>Admin Ekle</h1>
          Kullanıcı Adı:  
         <input type="text" name="username"><br /> 
        
          Şifre:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="password" name="password"><br /> <br /> 
         <input class="bttn" type="submit" value="Kaydet"/><br /><br /> 

         <?php 
         //mesaj varsa ekrana yazdır. 
         
         if (isset($mesaj)) echo $mesaj; ?> 
        
      </form>
  </div>
</div>



      
      
      
   </body>
</html>