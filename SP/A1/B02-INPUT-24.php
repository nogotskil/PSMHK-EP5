<?php 
$tanggal = date('Ymd');
$sekarang = date('d-m-Y');

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("smhk");
$tampil = mysql_query("SELECT * FROM spub WHERE tanggal = $tanggal and nama_tangki = 'A-1'") or die (mysql_error());
$data = mysql_fetch_array($tampil);
 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production A 1</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../index.php">Pertamina EP Asset 5</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">INPUT A 1 pada 24.00</a></li>
      <li><a href="B02.php"><< PILIH WAKTU</a></li>
    </ul> 
  </div>
</nav>
<div class="container">
  <h3 align="center">INPUT STOCK 24.00 PADA <?php echo $sekarang ?></h3>
  <hr>
  <h3 align="center">STOCK PADA 18.00 : <?php echo $data['eightteen'] ?></h3>
  <h3></h3>
  <hr>
 <div class="container">
    <form class="form-inline" action="prosesb0224.php" method="post" style="text-align: center">
  <div class="form-group">
    <label for="b0224">Input Produksi</label>
    <input type="number" class="form-control" id="b0224" name="b0224" step="0.0001" required>
  </div>
  <button type="submit" class="btn btn-default" onclick="<?php echo "script" ?>">Submit</button>
</form>  
 </div>
 <hr> 
</div>
  
<footer>
        <h2 class="text-nowrap text-uppercase text-center">PT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>