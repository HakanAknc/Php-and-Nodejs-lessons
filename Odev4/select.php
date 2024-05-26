<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Listesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: darkcyan;
        }
        tr:nth-child(even) {
            background-color: darkkhaki;
        }
        tr:hover {
            background-color: greenyellow;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost"; // Sunucu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "noveri"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Bağlantı kontrolü
if($conn->connect_error){
    die("Bağlantı hatası : ".$conn->connect_error);
}

// SQL sorgusu
$sql = "SELECT * FROM ogrenci";
$result = $conn->query($sql);

// Veri var mı yok mu kontrolü
if($result->num_rows > 0){
    // Tablo başlık satırı
    echo "<table>";
    echo "<tr><th>Öğrenci No</th><th>Ad</th><th>Soyad</th><th>Email</th></tr>";
    
    // Verileri çek ve tabloya ekle
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["numara"]."</td>";
        echo "<td>".$row["ad"]."</td>";
        echo "<td>".$row["soyad"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
    }
    
    // Tablo kapat
    echo "</table>";
} else {
    // Kayıt bulunamadı durumu
    echo "Kayıt bulunamadı!";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>

</body>
</html>
