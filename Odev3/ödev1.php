<?php
    // 1. Sıfırdan yüze kadar olan çift sayıların toplamını buldurunuz?
$toplam = 0;

for($i = 0; $i <= 100; $i += 2){
    $toplam += $i;
}

echo "Sıfırdan yüze kadar olan çift sayıların toplamı = " .$toplam;
?>