<?php
//3. Rastgele oluşturulmuş bir sayının tam bölenlerini buldurunuz?

// Rastgele bir sayı oluşturur
$random_number = rand(1, 100); // Örneğin, 1 ile 100 arasında rastgele bir sayı

echo "Oluşturulan rastgele sayı: " . $random_number . "<br>";
echo "Tam bölenleri: ";

// 1'den başlayarak rastgele sayının yarısına kadar olan sayıları kontrol et
for ($i = 1; $i <= $random_number / 2; $i++) {
    if ($random_number % $i == 0) {
        echo $i . " "; // Sayı rastgele sayının tam böleni ise ekrana yazdır
    }
}

// Rastgele sayı kendisinin tam böleni olduğu için ekleniyor
echo $random_number;
?>