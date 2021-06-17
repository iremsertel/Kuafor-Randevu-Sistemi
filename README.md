# Kuafor-Randevu-Sistemi (MySQL-PHP)
Web tabanlı programlama dersi kapsamında, MySQL-PHP kullanarak geliştiriğim bir Web sitesidir.
Kuaför salonları için tasarlanmış bir projedir.Personel kullanımı üzerinedir.Müşteri kullanımına göre tasarlanmamıştır.
Kuaförümüze randevu almak isteyen müşteriler telefonla bizi aradağında ya da salonumuza geldiğinde bu sistemi kullanarak onlara uygun tarih ve saat ayarlayabiliyoruz.
Oturum kapalıyken 'Admin Panelinden' giriş yapılmadan herhangi bir randevu alımı ya da randevu bilgilerini görme gibi işlemleri gerçekleştiremiyoruz.

## Açıklama
 `index.php` sayfası admin giriş panelidir.Buradan giriş yapılmadığı takdirde diğer php sayfalarına erişim gerçekleşemez ve işlemler gerçekleştirilemez.

- Sisteme giriş sağlandıktan sonra randevu işlemlerine erişim sağlanabiliyor.
- Sistemde admin ekleme,randevu girme,randevu güncelleme,silme ve son olarak randevu bilgilerini listeleme yapılabilmektedir.
- Randevu bilgilerimiz tarih ve saate göre düzenlenmiş bir şekilde listelenmektedir.

## Kullanılan Teknolojiler
- MySQL
- CSS
- PHP
- HTML5

## Demo:
- <http://randevusistemi.eu5.org/>

## Admin Giriş Bilgisi
En başta sisteme giriş yapabilmek için gerekli bilgiler.
```sh
Kullanıcıadı: admin
Şifre: 123456
```

## SQL Script
<https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/kuafor.sql>

`Tablo Yapısı:`

![TabloYapısı](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Tablo.PNG)

## Ekran Görüntüleri Ve Yapılabilen İşlemler
`Admin Giris Paneli:`
![AdminGirisPaneli](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/AdminGiris.PNG)

`Anasayfa:`
![AnaSayfa](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Anasayfa.PNG)

`Anasayfa Bağlantısı:`
Diğer işlem sayfalarındayken buraya tıklayarak Anasayfa'ya ulaşım sağlayabiliriz.
![AnasayfaBaglanti](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/BaglantiAnasayfa.PNG)

`Admin Ekle:`
Bu bölümde sisteme erişebilecek kişiler için kullanıcı adı ve şifre oluşturulur ve sisteme admin eklenmiş olur.
![AdminEkle](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Adminekle.PNG)

`Müsteri Randevu Gir:`
İstenilen randevu bilgileri girilerek müşteriler için randevu alımı sağlanmış olur.
![MüsteriRandevuGir](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Randevugir.PNG)

`Randevu Bilgileri:`
Bu bölümde randevu bilgilerini görebilirsiniz.
![RandevuBilgileri](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Randevubilgileri.PNG)

`Randevu Sil:`
![RandevuSil](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Randevusil.PNG)

`Randevu Bilgilerini Güncelleme Tablosu:`
![RandevuGüncelleTablo](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Randevug%C3%BCncelle.PNG)

`Randevu Güncelle:`
![RandevuGüncelleme](https://github.com/iremsertel/Kuafor-Randevu-Sistemi/blob/main/resimler/Randevug%C3%BCncelle2.PNG)

