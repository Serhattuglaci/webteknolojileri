<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders4</title>
</head>
<body>
    <h3>phpde diziler</h3>
<ol>
      <li>dizi oluşturmak için array () fonksiyonu veya [] kullanılabilir.</li>


<li> dizi içerisinde farklı türden birçok değer bulunabilir. ( int strong double) (1,2,3 "ali" "125"</li>
<li> echo ile dizi ekrana yazdırılamaz fakat dizinin içeriği ekrana yazdırabilirsiniz. array to string conversion hatası verir. fakat diznin örneğin 
    3 indisi sahip eleman "echo $diziadi[3] şeklinde yazdırılabilir"</li>
    <li> diznin içerisine string ifadeler ("") içerisne yazılır</li>
    <li> dizinin içerisindeki int ifadeler direkt yazılabilir.</li>
    <li>diznin elemanları birbirinden virgül (,) ile ayrılır.</li>
    <li> dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
    <li> diziler içerisinde diziler tanımlanabilir</li>

    







</ol>




 <?php  

$dizi1 = array(1, 2, 3, "alican", "ocak", "subat");
$dizi2 = [1, 2, 3, "alican"];

echo "<pre>";
print_r($dizi1);
echo "</pre>";

echo "dizinin 1. elemanı:" . $dizi1[1] . "<br>";
echo "dizinin 1. elemanın türü:" . gettype($dizi1[1]) . "<br>";



echo "dizinin 5. elemanı:" . gettype($dizi1[4]);
echo "dizinin 5. elemanı türü:" . gettype($dizi1[4]) . "<br>";

echo "dizinin 0. indisi: <b> $dizi1[0]</b><br>";
echo "dizinin 1. indisi: <b> $dizi1[1]</b><br>";
echo "dizinin 2. indisi: <b> $dizi1[2]</b><br>";
echo "dizinin 3. indisi: <b> $dizi1[3]</b><br>";
echo "dizinin 4. indisi: <b> $dizi1[4]</b><br>";
echo "dizinin 5. indisi: <b> $dizi1[5]</b><br>";

echo"<h4> dizinin içeriğinin foerach döngüsü ile yazdırılması-1</h4>";
foreach ($dizi1 as $eleman) {
    echo "$eleman <br>";
}


echo"<h4> dizinin içeriğinin foerach döngüsü ile yazdırılması-2</h4>";
foreach ($dizi1 as $anahtar => $deger) {
    echo "$anahtar - $deger <br>";
}

/*dizinin içeriğinin for dögüsü ile yazdırılması*/
for ($i = 0; $i < count($dizi1); $i++) {
echo "$i: $dizi1[$i] <br>";

}

$sayilar = array(1, 2, 3, 4, 5);

$sayilar = array(
    array(1,2,3,4,5), 
    array(10.5, 3.2, 1,7)
);
echo "<pre>";
print_r($sayilar);
echo "</pre>";

echo "sayılar dizisinin içerisindeki ikinci dizinin ikinci elemanı: " . $sayilar[1][1] ."<br>";
echo "sayılar dizisinin içerisindeki ikinci dizinin üçüncü elemanı: " . $sayilar[0][2] ."<br>";
echo "<br>*************************************<br>";

$sayilar = array(
   "Integer" => array(1,2,3,4,5), 
    "Double" => array(10.5, 3.2, 1.7)
);


$bilgiler=array(
"id" => 1,
"adi"  => "ahmet",
"soyadi"  => "erimez",
"gsm"     => "5342026807",
"cinsiyet"  => "erkek",
"yas"  =>    30

);
echo "$bilgiler[adi] $bilgiler[soyadi] hoşgeldiniz.<br>";

echo "<pre>";
print_r($bilgiler);
echo "</pre>";

foreach ($bilgiler  as $bilgi) {
    echo $bilgi ."-";
}
echo "<br><br><br><br>";
$bilgi

?>

</body>
</html>