<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Koşul İfadeleri</title>
</head>
<body>
    <?php
        // if - elseif - else
        // if($a>=100) {}
        echo "<p style='font-size:24px'>";
        $s = rand(0,100);  //0 ile 100 arasında rastgele sayı üretir.
        if($s>=50) echo "Sayı 50'den büyüktür!";
        else echo "Sayı 50'den küçüktür.";
        echo "<br>";
        echo "Rastgele gelen sayı = $s";
        echo "<br>";
        //switch
        $renk = "mavi";

        switch ($renk){
            case "kırmızı":
                echo "Seçiminiz kırmızı";
                break;
            case "mavi":
                echo "Seçiminiz mavi";
                break;
            case "yeşil":
                echo "Seçimin,z yeşil";
                break;
            default:
                echo "Lütfen geçerli bir renk seçiniz.";
        }

        echo "</p>"
    ?>
</body>
</html>