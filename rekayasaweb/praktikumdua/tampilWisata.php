<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
// Alamat LocalHost
// $send = curl("http://localhost/rekayasaweb/praktikum2/getWisata.php");

// Mengubah JSON menjadi Array
// $data = json_decode($send, TRUE);

$data = [
    ["id_wisata" => 1, "kota" => "SEMARANG", "landmark" => "LAWANH SEWU", "tarif" => "20000"],
    ["id_wisata" => 2, "kota" => "YOGYAKARTA", "landmark" => "PRAMBANAN", "tarif" => "35000"],
    ["id_wisata" => 3, "kota" => "MAGELANG", "landmark" => "BOROBUDUR", "tarif" => "45000"],
    ["id_wisata" => 4, "kota" => "SURAKARTA", "landmark" => "PGS", "tarif" => "GRATIS"]
];

// Tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>KOTA</th>";
echo "<th>LANDMARK</th>";
echo "<th>TARIF</th>";
echo "</tr>";

// Isi Tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row["kota"] . "</td>";
    echo "<td>" . $row["landmark"] . "</td>";
    echo "<td>" . $row["tarif"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>