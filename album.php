
<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:landing.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio - Album</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.querySelector('form[action="tambah_album.php"]');
            
            var namaAlbumInput = document.querySelector('input[name="namaalbum"]');
            var deskripsiInput = document.querySelector('input[name="deskripsi"]');
            
            var tambahButton = document.querySelector('input[type="submit"]');
            
            tambahButton.disabled = true;
            
            namaAlbumInput.addEventListener('input', validateInputs);
            deskripsiInput.addEventListener('input', validateInputs);
            
            function validateInputs() {
                if (namaAlbumInput.value.trim() !== '' && deskripsiInput.value.trim() !== '') {
                    tambahButton.disabled = false;
                } else {
                    tambahButton.disabled = true;
                }
            }
        });
    </script>
    <script>
    function clearForm() {
        var namaAlbumInput = document.querySelector('input[name="namaalbum"]');
        var deskripsiInput = document.querySelector('input[name="deskripsi"]');
        
        namaAlbumInput.value = '';
        deskripsiInput.value = '';
    }
</script>
  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <i class="bi bi-camera"></i>
        <h1>PhotoFolio</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="album.php" class="active">Album</a></li>
          <li><a href="foto.php">Foto</a></li>
          <li><a href="logout.php">logout</a></li>

        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Album</h2>
            <p>Album galeri adalah sebuah fitur atau bagian dalam suatu proyek atau aplikasi yang dirancang untuk menampilkan kumpulan gambar atau media visual lainnya secara terorganisir dan mudah diakses. </p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="row justify-content-center mt-4">
          <div class="col-lg-9">
            
            <form action="tambah_album.php" method="post" >
            <div class="row">

                
                Nama Album<div class="form-group mt-3">
                <input type="text" class="form-control" name="namaalbum" style="background-color: var(--color-secondary); color: #fff; border: none;" autocomplete="off">    
</div>
                
                Deskripsi<div class="form-group mt-3">
                <input type="text" class="form-control" name="deskripsi" style="background-color: var(--color-secondary); color: #fff; border: none;" autocomplete="off">      
</div>     
                <p><br></p>
                <div class="col-md-6">
                            <input type="submit" value="Tambah"
                                style="background-color: var(--color-secondary); color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                <button type="button" onclick="clearForm()" style="background-color: var(--color-primary); color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Clear</button>
                        </div>
    </form>
<p><br></p>
    <table border="1" cellpadding=5 cellspacing=0>

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                        ||
                        <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
      &copy; Copyright <strong><span>Galeri</span></strong>. 
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by Bertt
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>