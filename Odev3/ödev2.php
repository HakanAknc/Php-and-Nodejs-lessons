<?php
// 2. Rastgele saylardan oluşmuş 20 elemanlı bir array oluşturunuz?

// Boş bir dizi oluştur
$array = array();

// 20 elemana kadar döngü oluşturarak rastgele sayılar ekledim
for ($i = 0; $i < 20; $i++) {
    $random_number = rand(1, 100); // 1 ile 100 arasında rastgele bir sayı üret
    $array[] = $random_number; // Oluşturulan rastgele sayıyı diziye ekle
}

// Oluşturulan diziyi ekrana yazdır
echo "Oluşturulan dizi: ";
print_r($array);
?>