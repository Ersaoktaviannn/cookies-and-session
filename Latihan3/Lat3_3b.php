<?php
session_start();

// Fungsi untuk menghitung faktorial
function hitungFaktorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * hitungFaktorial($n - 1);
}

// Ambil nilai dari form
$angka = $_POST["angka"];
$hasil_faktorial = hitungFaktorial($angka);

// Buat array data
$data = [
    "angka" => $angka,
    "faktorial" => $hasil_faktorial,
    "nim" => "235150601111033", 
    "nama" => "Mazaya Nur Shabrina"
];

// Simpan ke session
$_SESSION["data"] = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Hasil Faktorial</title>
</head>
<body>
    <h2>Hasil Perhitungan Faktorial</h2>
    <p>Angka yang dimasukkan: <?php echo $angka; ?></p>
    <p>Nilai faktorialnya: <?php echo $hasil_faktorial; ?></p>
    <a href="Lat3_3c.php">Lihat Detail Data</a>
</body>
</html>