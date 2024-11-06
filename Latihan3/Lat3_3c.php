<?php
session_start();
if (empty($_SESSION["data"])) {
    echo "Maaf, tidak ada data yang tersimpan";
} else {
    $data = $_SESSION["data"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Detail Data</title>
</head>
<body>
    <h2>Detail Data</h2>
    <p>Angka yang dimasukkan: <?php echo $data["angka"]; ?></p>
    <p>Nilai Faktorial: <?php echo $data["faktorial"]; ?></p>
    <p>NIM: <?php echo $data["nim"]; ?></p>
    <p>Nama: <?php echo $data["nama"]; ?></p>
    
    <form id="form1" name="form1" method="post" action="Lat3_3d.php">
        <input type="submit" name="button" id="button" value="Kembali ke Awal" />
    </form>
</body>
</html>
<?php 
} 
?>