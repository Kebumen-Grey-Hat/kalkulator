<!DOCTYPE html>
<html>
<head><title>KALKULATOR SEDERHANA</title></head>
<body>
<body bgcolor="white">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="" method="POST">
<br>
MASUKAN ANGKA PERTAMA : <input type="text" name="bil1"><br>
<br>
MASUKAN ANGKA KEDUAAA : <input type="text" name="bil2"><br>
<br>
<select name="kalkulator">
     <option value="tambah">+</option>
     <option value="kurang">-</option>
     <option value="kali">*</option>
     <option value="bagi">:</option>
</select>
<input type="submit" name="hasil" value="HITUNG">
<input type="submit" name="riset" value="RISET"><br>
</form>
</body>
</html>

<?php


if (isset($_POST['hasil'])) {
   $kalkulator = $_POST['kalkulator'];
   $bil1 = $_POST['bil1'];
   $bil2 = $_POST['bil2'];
   if ($kalkulator == "tambah") {
      $has = $bil1 + $bil2;
      echo "HASIL DARI ".$bil1." + ".$bil2." = ".$has;
   }
   if ($kalkulator == "kurang") {
      $hab = $bil1 - $bil2;
      echo "HASIL DARI ".$bil1." - ".$bil2." = ".$hab;
   }
   if ($kalkulator == "kali") {
      $hai = $bil1 * $bil2;
      echo "HASIL DARI ".$bil1." * ".$bil2." = ".$hai;
   }
   if ($kalkulator == "bagi") {
      $lol = $bil1 / $bil2;
      echo "HASIL DARI ".$bil1." / ".$bil2." = ".$lol;
   }
}
?>
