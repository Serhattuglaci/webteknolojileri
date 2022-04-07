<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h3>phde dizilere devam</3>
     <?php 

  $isimler = array();
  print_r($isimler);
  $isimler[] = "mehmet";
  $isimler[] = "canan";
  $isimler[]= "kemal";
  $isimler[]= "nur";

echo "<pre>";
print_r($isimler);
echo "</pre><hr>";

$isimler2 = array();
print_r($isimler2);
$isimler2["isim1"] = "mehmet";
$isimler2["isim2"] = "canan";
$isimler2["isim3"]= "kemal";
$isimler2["isim4"]= "nur";

echo "<pre>";
print_r($isimler2);
echo "</pre><hr>";

$ogrencidetay= array(
"id"       => 1,
"adi"       => "havva",
"soyadi"    => "yıldız",
"bolum"     =>"bilgisayar",
"yas"       => 20,
"dersler"    => array(
    "ders1"    => "web programlama",
    "ders2"    =>"veri tabanı",
    "ders3"     =>"mobil programlama",

),
"sınıf"     =>2,
"memleket"  => "izmir"
);

echo "<pre>";
print_r($ogrencidetay);
echo "</pre><hr>";



/* uygulama :
 cıktı : havvanur isimliöğrencin web programlama , veri tabanı, mobil programlama dersleri vardır.*/


























?>
</body>
</html>