<?php
 $koneksi = new mysqli("localhost","root","","artnow"); 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Art_Now </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://localhost/Artnow/">Home</a>
          <li class="menu-active"><a href="admin">Admin</a>
          <li class="menu-active"><a href="daftar_arsitek.php">Arsitek</a>
          <li class="menu-active"><a href="?">Chat</a>
          <li class="menu-active"><a href="?">Desain Bangunan</a>
          <li class="menu-active"><a href="?">Shop</a>
        </ul>
      </nav>
      <br><br><br>
<body>
  <div class="container">
  <table align="center" style="border: 1px solid black" bgcolor="#FFBBCC">
      <center>
    <h2> Daftar Arsitek </h2></center>
    <div id="output">
    </div>
    <a href="Arsitek" class="btn btn-info">Login Arsitek</a>

    <table  class="table table-bordered" bgcolor="#11A6D4">
      <thead>
      <tr>
        <th align="center" bgcolor="#EA672E"><strong>No</strong></th>
        <th align="center" bgcolor="#EA672E"><strong>Nama Arsitek</strong></th>
        <th align="center" bgcolor="#EA672E"><strong>No. Handphone </strong></th>
        <th align="center" bgcolor="#EA672E"><strong>Bidang Desain</strong></th>
        <th align="center" bgcolor="#EA672E"><strong>Arsitek</strong></th>
      </tr>
    </thead>
    <tbody>

    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM arsitek");?>
    <?php while($pecah = $ambil->fetch_assoc()) {?>
        <tr>

          <td bgcolor="#FFFFFF"><?php echo $nomor; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $pecah['nama_arsitek']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $pecah['no_tlp']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $pecah['bidang']; ?></td>
          <td><img src="gambar/<?php echo $pecah['gambar'];?>" hight="75" width="75" ></td>
          <?php $nomor++; ?>
          <?php } ?> 
          </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>

