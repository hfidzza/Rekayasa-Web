<?php
$nim_array = array(
    "Yanto" => "g231220001",
    "Mulyo" => "g231220020",
    "Syahro" => "g231220202",
    "SriMul" => "g231220000",
);

$json_nim_string = json_encode($nim_array);
?>

<hr>

<?php
// 1. Output JSON dari langkah sebelumnya
echo "1. Output JSON (String JSON yang akan di-decode): " . $json_nim_string . "<br><br>";

// --- A. String JSON yang akan di-decode ---
echo "--- A. String JSON yang akan di-decode ---<br>";
echo "String JSON: " . $json_nim_string . "<br><br>";

// --- B. Decode ke PHP Object ---
$nim_object = json_decode($json_nim_string);

echo "--- B. Hasil Decode ke PHP Object ---<br>";
echo "Tipe Data: **Object (stdClass)**<br>";

// Mengakses nilai (NIM) menggunakan operator ->
echo "NIM Yanto (Object): " . $nim_object->Yanto . "<br>";
echo "NIM SriMul (Object): " . $nim_object->SriMul . "<br>";
echo "NIM Mulyo (Object): " . $nim_object->Mulyo . "<br><br>";

// --- C. Decode ke PHP Array Asosiatif ---
$nim_array_assoc = json_decode($json_nim_string, true);

echo "--- C. Hasil Decode ke PHP Array Asosiatif ---<br>";
echo "Tipe Data: **Array Asosiatif**<br>";

// Mengakses nilai (NIM) menggunakan kurung
echo "NIM Yanto (Array): " . $nim_array_assoc["Yanto"] . "<br>";
echo "NIM Mulyo (Array): " . $nim_array_assoc["Mulyo"] . "<br>";
echo "NIM Syahro (Array): " . $nim_array_assoc["Syahro"] . "<br>";
?>