<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <?php
/*php versiyon ve detay bilgisini gösterir*/ 
//echo phpinfo();
echo "<h4> Tırnak işaretleri arasındaki farklar<h4> ";
$uni = "adnan menderes üniversitesi";
echo "değişken içeriği: $uni";
echo "<br";
/* değişken isminin yazdırılması*/
echo "kazandığınız üniversite:" . $uni;
echo "<br>";
echo "kazandığınız üniversite". '$uni';
echo "<br>";
/* değişken özelliğinin yazdırılması*/
echo "<br>";
echo "1-kazandığınız üniversite: $uni";
echo "<br>";
echo "2-kazandığınız üniversite:" . $uni;
echo "<br>";
echo "3-kazandığınız üniversite:" . "$uni";
echo "<br>";
echo '4-kazandığınız üniversite:' . "$uni";
echo "<br>";
echo "<hr> <h4> temel matamtiksel işlemler</h4>";
echo "<h5> toplama işlemi</h5>";
$sayi1= 10;
$sayi2= 20;
echo "\$sayi1 + \$sayi2 =" . ($sayi1+$sayi2);
echo "<br>";
echo "$sayi1 + $sayi2 =" . ($sayi1 + $sayi2);
echo "<br>";
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";
 
echo "<h5> bölme işlemi</h5>";
$sayi1= 10;
$sayi2= 20;
echo "\$sayi1 / \$sayi2 =" . ($sayi1/$sayi2);
echo "<br>";
echo "$sayi1 / $sayi2 =" . ($sayi1 / $sayi2);
echo "<br>";
$sonuc = $sayi1 / $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";

echo "<h5> cıkarma işlemi</h5>";
$sayi1= 10;
$sayi2= 20;
echo "\$sayi1 - \$sayi2 =" . ($sayi1-$sayi2);
echo "<br>";
echo "$sayi1 - $sayi2 =" . ($sayi1 - $sayi2);
echo "<br>";
$sonuc = $sayi1 - $sayi2;
echo "$sayi1 - $sayi2 = $sonuc";

echo "<h5> çarpma işlemi</h5>";
$sayi1= 10;
$sayi2= 20;
echo "\$sayi1 * \$sayi2 =" . ($sayi1*$sayi2);
echo "<br>";
echo "$sayi1 * $sayi2 =" . ($sayi1 * $sayi2);
echo "<br>";
$sonuc = $sayi1 * $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";
 
 
echo "<h5> Üst alma işlemi</h5>";
 $x = 4;
 $y = 2;
 //$y = (int)"2"; //dönüşüm işlemi
 echo "değişken tipi:" . gettype($x) . "<br>";
 echo "değişken tipi:" . gettype($y) . "<br>";
 echo "$x<sup>$y</sup>= " . pow($x, $y);

 echo "<h5> Karekök alma işlemi(sqrt(x))</h5>";
 $x = 123 ;
 $karekok = sqrt($x);
 echo "$x'in kareökü: $karekok";

 echo "<h5> mutlak değer işlemi(abs(x))</h5>";
 $x = (-12);
 $mutlak = abs($x);
 echo "|$x| sayısının mutlak değeri: $mutlak";

 echo "<h5> taban değişim işlemi (base_convert(x,taban1,taban2))</h5>";
 echo "27 sayısının 2'lik tabandaki karşılığı : " .  base_convert(27,10,2,);
 echo "<br>";
 $sayi1 = 50;
 $taban = 10;
 $yenitaban = 2;
 $sonuc = base_convert($sayi1,$taban,$yenitaban);
 echo "($sayi1)<sub>$taban</sub>=($sonuc)<sub>$yenitaban</sub>";


 echo "<h5> mod işlemi (fmod(x,y))</h5>";
 $x = 20;
 $y = 4;
 $mod = fmod($x,$y);
 echo "$x mod $y : $mod";
 /*girilen sayının tek m i cift mi olduğunu gösterir*/
 echo "<br> $x sayısı :" . (fmod($x,2) == 0 ?"çişfttir" : "tektir");

 echo "<h5>yuvarlama işlemleri (round(x,y))</h5>";
 $x=15.315;
 $y=15.385;

echo "$x bir ondalık bsamak yuvarlamsı sonucu :" .round($x, 1) . "<br>";
echo "$y bir ondalık bsamak yuvarlamsı sonucu :" .round($x, 1). "<br>";

echo "$x iki ondalık bsamak yuvarlamsı sonucu :" .round($x, 2). "<br>";
echo "$y bir ondalık bsamak yuvarlamsı sonucu :" .round($x, 2). "<br>";
echo "<h5>yuvarlama işlemleri (floor(x))</h5>";
/* en yakın en tam sayıya  yuvarlar*/
$x = 15.913;
$y = 15.213;
 echo "$x floor yuvarlamsı sonucu " . floor($x) . "<br>";
 echo "$y floor yuvarlamsı sonucu " . floor($y) . "<br>";
 echo "<h5>yuvarlama işlemleri (ceil(x))</h5>";
 /*kendisinden büyük , en kücük tam sayıya yuvarlar*/
 $x = 15.913;
 $y = 15.213;
 echo "$x ceil yuvarlaömsı sonucu " . ceil($x) . "<br>";
 echo "$y ceil yuvarlaömsı sonucu " . ceil($y) . "<br>";

 echo "<h5> rastgele üretme işlemi (rand(x,y))</h5>";
 echo "10-100 arasında rastgele sayı üretildi:" . rand(10,100);
     

 echo "<br>";
   for ($i = 1; $i <=10;  $i++)  {

echo "$i. sayı:" . rand(0,100) . "<br>";



   }
 
 ?>
</body>
</html>