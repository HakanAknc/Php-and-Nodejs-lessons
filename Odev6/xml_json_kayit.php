<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kayit_islemi";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

// Verileri seç
$sql = "SELECT * FROM kayit";
$result = $conn->query($sql);

$rows = [];
if ($result->num_rows > 0) {
    // Her satırı diziye ekle
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    echo "0 sonuç";
}
$conn->close();

// Verileri .json dosyasına kaydet
$json_data = json_encode($rows, JSON_PRETTY_PRINT);

if (file_put_contents('data.json', $json_data)) {
    echo "JSON dosyası başarıyla oluşturuldu.<br>";
} else {
    echo "JSON dosyası oluşturulurken bir hata oluştu.<br>";
}

// Verileri .xml dosyasına kaydet
function array_to_xml($data, &$xml_data) {
    foreach($data as $key => $value) {
        if (is_array($value)) {
            $subnode = $xml_data->addChild("$key");
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key", htmlspecialchars("$value"));
        }
    }
}

$xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');

array_to_xml($rows, $xml_data);

$result = $xml_data->asXML('data.xml');

if ($result) {
    echo "XML dosyası başarıyla oluşturuldu.";
} else {
    echo "XML dosyası oluşturulurken bir hata oluştu.";
}
?>
