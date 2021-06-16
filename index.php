<?php 
   session_start(); 
   
   require('mysqlbaglan.php'); 
   
    
   
   if (isset($_POST['username']) and isset($_POST['password'])){ 
   
   extract($_POST); 
   
    
   
   // sifre metni SHA256 ile şifreleniyor. 
   
   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `kullanici` WHERE "; 
   
   $sql= $sql . "kullaniciadi='$username' and sifre='$password'"; 
   
    
   
   $cevap = mysqli_query($baglanti, $sql); 
   
   //eger cevap FALSE ise hata yazdiriyoruz.       
   
   if(!$cevap ){ 
   
       echo '<br>Hata:' . mysqli_error($baglanti); 
   
   } 
   
   //veritabanindan dönen satır sayısını bul 
   
   $say = mysqli_num_rows($cevap); 
   
   if ($say == 1){ 
   
       $_SESSION['username'] = $username; 
   
    }else{ 
   
   $mesaj = "<h3> Hatalı Kullanıcı adı veya Şifre!</h3>"; 
   
    } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
   
   header("Location: anasayfa.php"); 
   
   }else{ 
   
   //oturum yok ise login formu görüntüle 
   
   ?> 
<html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" type="text/css" href="login.css"/>
   <title>| Randevu Sistemi |</title>
   </head>
   <body>
      <h1>Randevu Sistemine Giriş</h1>
      <form class="form" action="<?php $_PHP_SELF ?>" method="POST"> 
         
          <h2>Admin Giriş Paneli</h2>  
         Kullanıcı Adı: 
         <input type="text" name="username"><br /> 
         Şifre:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="password" name="password" ><br /><br /> 
         <input type="submit" value="GİRİŞ"/><br /><br /> 
         <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            ?> 
        
      </form>
   </body>
</html>
<?php } ?>