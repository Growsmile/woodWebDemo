<?php
$companyNameVar = "Maksimus Koks";
?>

<?php include 'views/head.php';?>

<!-- valodu maiņa -->
<script src="lang.js"></script>

<body>
<!-- navbar -->
<?php include 'views/navbar.php';?>


<!-- Carousel wrapper-->
<?php include 'views/carusel.php';?>


<main>

<!-- products -->
<?php include 'views/productsAlbum.php';?>
  <!-- Product section house-->
  <?php include 'views/productsAlbumSection_1.php';?>
  <!-- Product section roof-->
  <?php include 'views/productsAlbumSection_2.php';?>
  <!-- Product section sauna-->
  <?php include 'views/productsAlbumSection_3.php';?>
  <!-- Product section Garden-->
  <?php include 'views/productsAlbumSection_4.php';?>  

<!-- AboutUS -->
<?php include 'views/aboutUs.php';?>

<!-- contacts  -->
<?php include 'views/contacts.php';?>

</main>
<footer>


  <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © <script>document.write(new Date().getFullYear())</script> Copyright:
      <a class="text-dark" href=""><?php echo $companyNameVar; ?></a>
    </div>
  <!-- Copyright -->
</footer>

<script type="text/javascript" src="js/mdb.umd.min.js"></script>

</body>
</html>


 <!-- GWCODEX -->