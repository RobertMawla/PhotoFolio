<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:kosong.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio - Index</title>
  <style>
.post img {
    width: 100%;
    height: auto; /* Menggunakan "auto" untuk menjaga aspek rasio gambar */
    max-width: 100%; /* Mencegah gambar melebihi lebar maksimum kontennya */
    text-align: center;
    display: block;
    margin: 0 auto;
}
.post {
    max-width: 800px;
    margin: 0 auto;
    border: 1px solid #ccc; /* Menambahkan border */
    padding: 10px; /* Menambahkan padding */
    margin-bottom: 20px; /* Menambahkan jarak antara setiap foto */
}

.post-image {
    width: 100%;
    height: auto;
    max-width: 100%;
    text-align: center;
    display: block;
    margin: 0 auto;
}

.post-content {
    padding-top: 10px; /* Menambahkan ruang di atas deskripsi */
}

.post-description {
    font-size: 14px; /* Ganti ukuran font deskripsi sesuai kebutuhan */
}
.post-content {
    padding-top: 10px;
}

.post-details {
    margin-top: 5px; /* Menambahkan jarak antara judul foto dan informasi tambahan */
}

.post-details p {
    margin: 5px 0; /* Menambahkan jarak antara setiap paragraf */
}


#searchInput {
    width: 100%;
    max-width: 400px; 
    padding: 10px;
    margin: 20px auto;
    display: block;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
  }
        </style>
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

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>PhotoFolio</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="album.php">Album</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Hai! <span><b><?=$_SESSION['namalengkap']?></b></span> Selamat Datang Di Galeri Foto</h2>
          <p>Web galeri foto adalah situs web yang dirancang khusus untuk menampilkan dan mengorganisir koleksi foto secara online.</p>
          <input type="text" id="searchInput" placeholder="Cari berdasarkan username atau judul foto" oninput="searchPhotos()">

<script>
function searchPhotos() {
    var input, filter, photos, post, title, username, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    photos = document.getElementsByClassName('post');

    for (i = 0; i < photos.length; i++) {
        post = photos[i];
        title = post.getElementsByTagName('h2')[0];
        username = post.getElementsByTagName('p')[1];

        txtValue = title.textContent || title.innerText;
        txtValue += ' ' + (username.textContent || username.innerText);

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            post.style.display = '';
        } else {
            post.style.display = 'none';
        }
    }
}
</script>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row">
        <?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM foto, user WHERE foto.userid=user.userid");
$counter = 0; // Counter to track the number of photos displayed
echo '<div class="row">';
while($data = mysqli_fetch_array($sql)){
    $fotoid = $data['fotoid'];
    $likeCountQuery = mysqli_query($conn, "SELECT COUNT(*) as likeCount FROM likefoto WHERE fotoid='$fotoid'");
    $likeCountData = mysqli_fetch_array($likeCountQuery);
    $likeCount = $likeCountData['likeCount'];
?>
    <div class="col-md-12">
        <div class="post">
            <img src="gambar/<?=$data['lokasifile']?>" alt="<?=$data['judulfoto']?>" class="post-image">
            <div class="post-content">
    <h2><?=$data['judulfoto']?></h2>
    <div class="post-details">
        <p>Description: <?=$data['deskripsifoto']?></p>
        <p>Posted by: <?=$data['username']?></p>
    </div>
</div>

            <div class="post-actions">
    
        <br>
        
    <a href="like.php?fotoid=<?=$data['fotoid']?>">Like (<?=$likeCount?>)</a>
    <!-- <a href="like.php?fotoid=<?=$data['fotoid']?>">Like <i class="fas fa-heart"></i> (<?=$likeCount?>)</a> -->

    ||
    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
    <div class="liked-by">
    Disukai Oleh :
        <?php
        // Fetch users who liked this photo
        $likedUsersQuery = mysqli_query($conn, "SELECT user.username FROM likefoto INNER JOIN user ON likefoto.userid = user.userid WHERE likefoto.fotoid='$fotoid'");
        $likedUsers = array();
        while ($likedUserData = mysqli_fetch_assoc($likedUsersQuery)) {
            $likedUsers[] = $likedUserData['username'];
        }
        echo implode(', ', $likedUsers);
        ?>
        
    </div>
</div>

        </div>
    </div>
<?php
    $counter++;
    if ($counter % 4 == 0) {
        // Close the row and start a new one after every 4 photos
        echo '</div><div class="row">';
    }
}
echo '</div>';
?>
      </div>
    </section><!-- End Gallery Section -->

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