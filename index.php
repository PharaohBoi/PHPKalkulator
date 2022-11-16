<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<header>
  <div class="nav">
    <a href="#">Kalkulator Sederhana</a>
  </div>
</header>

  <?php 
    if (isset($_POST ['hitung'])) {
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
      $operasi = $_POST['operasi'];
      switch ($operasi) {
        case 'tambah':
            $hasil = $bil1+$bil2;
          break;
        case 'kurang':
            $hasil = $bil1-$bil2;
          break;
        case 'kali':
            $hasil = $bil1*$bil2;
          break;
        case 'bagi':
            $hasil = $bil1/$bil2;
          break;
      }
    }
  ?>
  <div class="kalkulator">
    <h2 class="judul">KALKULATOR</h2>
    <form method="post" action="index.php">
      <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
      <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
      <select name="operasi" class="opt">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">%</option>
      </select>
      <input type="submit" name="hitung" value="Hitung" class="tombol">
    </form>

    <?php if (isset($_POST ['hitung'])) { ?>
      <!-- <input type="text" value="<?php echo $bil1; ?>" class="bil">
      <input type="text" value="<?php echo $operasi; ?>" class="opt">
      <input type="text" value="<?php echo $bil2; ?>" class="bil"> -->
        <input type="text" value="<?php echo $hasil; ?>" class="hasil" readonly>
      <?php }else{ ?>
        <input type="text" value="0" class="hasil" readonly>
      <?php } ?>
  </div>


  <!-- Footer -->
<footer>
  <div class="footer">
    <p>Copyright&copy;2022 Agung DS</p>
  </div>
</footer>

</body>
</html>