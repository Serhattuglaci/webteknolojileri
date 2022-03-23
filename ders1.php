<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders1</title>
</head>
<body>
    <!-- html yorum satırı -->
    <?php

/* acıklama satır bloğu 
coklu satır kullanılabilir  kısayol: alt+shıft+A
*/
// tek satır acıklama için kullanılır.
/* kullanılan komut:
 echo: ekrana yazdırma işlemi yapar.
    komut icerisinde html etiketleri kullanılabilir
    cift tırnak veua tek trınak kullanılabilir  
    cift tırnak ile yazıldığında içerisindeki değişkenlerin içeriğini ekrana yazdırır
    nokta operatörü ile birleştirme işlemi yapılabililir
    ters slash (\) kaçış karakterdir özel ifadelerden önce kullanılır

 


*/
 echo "<h3>Adnan Menderes Üniversitesi/h3>";
 echo "<h4> Aydın Meslek yüksekokulu</h4>";
 echo "Bilgisayar Mühendisliği" . " Aymes";
 echo "<br>Bilgisayar Mühendisliği" . " Aymes";
 echo "<hr> <h4> değiken  tanımlama </h4>";
 echo ">ol>
 <li> değişken isimleri dolar ile başlar.</li>
 <li>değişken isimleri sayısal ifadelerle başlamaz.</li>
 <li>değişken ismleri boşuk kullanılmaz . iki kelime birinci_sınıf birinci-sinif olarak kullanılabilir </li>
 <li>değişken isimleri kücük büyük harfflere duyarlıdır \$sayi != </li>
 <li> değişken ismi değikenin taşıdığı iceriği ifade etmeli</li>
 <li>değişken içeriğinde metinsel ifade varsa tırnak (\") veya (') kullanılabilir  </li>
 <li>değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir</li>
 <li>değişken içerikleri  ekrana  echo ile yazdırabilir.</li>
 </ol>";
 echo "<hr><h4> değişken tanımlama örnekleri </h4>";
 $isim = "ahmet";
 $soyisim = "erimez";
 $gsn ="1234567890";
 echo $isim;
 echo "$isim $soyisim $gsn";
 /* 
 üniversite myo ad soyad numara değişkenlerini tanımlayınız.
 bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.
 
 
 
 */
 $unı="adu";
 $myo="aymes";
 $ad="nazlı";
 $soyad="gül";
 $numara="123456";

 
 
 

 ?>
<form action ="">
    <label for="üniversite">üni: </label>
    <label type="text" name ="" value="<?php echo $unı; ?>"id="üniversite" disabled><br>
    <label for="myo">myo: </label>
    <label type="text" name ="" value="<?php echo $myo; ?>"id="myo" disabled><br> 
    <label for="$ad">ad: </label>
    <label type="text" name ="" value="<?php echo $ad; ?>"id="ad" disabled><br> 
    <label for="$soyad">soyad: </label>
    <label type="text" name ="" value="<?php echo $soyad; ?>"id="soyad" disabled><br>
    <label for="$numara">numara: </label>
    <label type="text" name ="" value="<?php echo $numara; ?>"id="numara" disabled><br>

<br><br><br<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>