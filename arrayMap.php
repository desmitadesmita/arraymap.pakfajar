<?php
$jumlah = $_POST['jumlah'] ?? 0;
$nama_panggilan = $_POST['nama_panggilan'] ?? [];
$nama_lengkap   = $_POST['nama_lengkap'] ?? [];
$umur           = $_POST['umur'] ?? [];

// Gabung jadi array multidimensi
$dataSiswa = [];
for ($i = 0; $i < $jumlah; $i++) {
    $dataSiswa[] = array(
        "nama_panggilan" => $nama_panggilan[$i],
        "nama_lengkap"   => $nama_lengkap[$i],
        "umur"           => $umur[$i]
    );
}

// Tampilkan
echo "<h3>Jumlah siswa yang akan diinput: " . htmlspecialchars($jumlah) . "</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Nama Panggilan</th>
        <th>Nama Lengkap</th>
        <th>Umur</th>
      </tr>";

foreach ($dataSiswa as $siswa) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($siswa["nama_panggilan"]) . "</td>";
    echo "<td>" . htmlspecialchars($siswa["nama_lengkap"]) . "</td>";
    echo "<td>" . htmlspecialchars($siswa["umur"]) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array.css">
</head>
<body>
    
</body>
</html>