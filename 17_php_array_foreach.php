<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array  ve Foreach Dongusu</title>
</head>
<body>
    <?php
    // Diziler 0.indexten başlar 
    $sayilar = array(5,7,4,3,9,2,0,1);
    echo "$sayilar[4] <br>";   // 4.indexi getirir 
    echo "$sayilar[6] <br>";   // 6.indexi getirir.
    //echo "$sayilar[10]";     // 10.index olmadığı için hata vericektir.    
    
    echo "<br>";

    $dizi = array("elma","armut","kayısı","kiraz","muz");
    foreach ($dizi as $x){   // dizinin her elemanını x değişkeni gibi kabul et ve x'i yazdır.
        echo $x."<br>";
    }

    echo "<br>";

    $yas = array("ali"=>"35","mustafa"=>"40","elif"=>"30");
    foreach($yas as $x => $value){
        echo "$x yaşı = $value <br>";
}

    ?>
</body>
</html>