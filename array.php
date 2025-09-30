<?php           
$jumlah = $_POST['jumlah'] ?? ;
if ($jumlah < 1) {
    die("Jumlah siswa tidak valid");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Input Data Siswa</title>
</head>
<body>
<form action="arrayMap.php" method="post">
  <label><h3>Jumlah siswa yang akan diinput: </h3></label>
  <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
  <?php
  // Generate form sebanyak jumlah siswa
  for ($i = 1; $i <= $jumlah; $i++) {
      echo "<h4>Siswa $i</h4>";
      echo "Nama Panggilan: <input type='text' name='nama_panggilan[]'><br>";
      echo "Nama Lengkap: <input type='text' name='nama_lengkap[]' required><br>";
      echo "Umur: <input type='number' name='umur[]' required><br><br>";
  }
  ?>
  <input type="submit" value="Simpan">
</form>
</body>
</html>
