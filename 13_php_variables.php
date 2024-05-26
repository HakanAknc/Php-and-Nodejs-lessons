<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Değişkenler</title>
</head>
<body>
    <?php
        //Açıklama Satırı
        /* Php veri türleri
            integer
            float
            string
            boolean
            array -> list yapısı
        */

    $a = 8; //değişkenler dolar işareti ile başlar, tip belirtmeye gerek yoktur
    $b = 13.5; //otomatik olarak float alır
    $metin = "PHP string değişken";
    $metin2 = "Hakan Akıncı";
    // Değişkenleri yazdrımak
    echo "<p style='font-size:24px'>";  // <p> tag açılışı
    echo "Değişken yazdırmak için $a <br>";
    echo "Stringler nokta işareti ile toplanır ".$b." burada yazıldı. <br>";
    echo "Metin değişkeni ". $metin." toplanır <br>";
    echo "Metin2 değişkeni ile (" .$a.") yazıldı <br>";
    echo "a değeri ile (" .$metin2.") yazıldı. <br>";
    echo $a + $b;
    echo "<br>";
    echo $metin.$b.$a;
    echo "<br>";
    echo $a.$metin2.$b.$a;

    echo "<p>";   // </p> tag kapanışı

    ?>
</body>
</html>