<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio - Landing</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <style>
            .post {
    height: 500px; /* Sesuaikan tinggi maksimum sesuai kebutuhan */
    overflow: hidden; /* Sembunyikan konten yang melebihi tinggi maksimum */
    margin-bottom: 20px; /* Atur jarak antara setiap elemen post */
  }

  /* Batasi deskripsi menjadi 3 baris */
  .post-content p {
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Tentukan jumlah baris yang ditampilkan */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis; /* Tampilkan elipsis (...) jika teks melebihi jumlah baris yang ditentukan */
  }
    .post img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    text-align: center;
}

@import url("https://fonts.googleapis.com/css?family=Raleway");

:root {
  --glow-color: hsl(186 100% 69%);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  width: 100%;
}


.glowing-btn {
  position: relative;
  color: var(--glow-color);
  cursor: pointer;
  padding: 0.35em 0.5em;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 1em;
  font-weight: 900;
  letter-spacing: 1em;

  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}
.glowing-btn::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
}

.glowing-btn::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  background-color: var(--glow-color);
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}
.glowing-txt {
  float: left;
  margin-right: -0.8em;
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}



.glowing-btn:hover {
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  animation: none;
}

.glowing-btn:hover .glowing-txt {
  animation: none;
}

.glowing-btn:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

.glowing-btn:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

.glowing-btn:hover:after {
  opacity: 1;
}

@keyframes faulty-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 0.1;
  }
  4% {
    opacity: 0.5;
  }
  19% {
    opacity: 0.5;
  }
  21% {
    opacity: 0.1;
  }
  23% {
    opacity: 1;
  }
  80% {
    opacity: 0.5;
  }
  83% {
    opacity: 0.4;
  }

  87% {
    opacity: 1;
  }
}

@keyframes text-flicker {
  0% {
    opacity: 0.1;
  }

  2% {
    opacity: 1;
  }

  8% {
    opacity: 0.1;
  }

  9% {
    opacity: 1;
  }

  12% {
    opacity: 0.1;
  }
  20% {
    opacity: 1;
  }
  25% {
    opacity: 0.3;
  }
  30% {
    opacity: 1;
  }

  70% {
    opacity: 0.7;
  }
  72% {
    opacity: 0.2;
  }

  77% {
    opacity: 0.9;
  }
  100% {
    opacity: 0.9;
  }
}

@keyframes border-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 1;
  }
  4% {
    opacity: 0.1;
  }

  8% {
    opacity: 1;
  }
  70% {
    opacity: 0.7;
  }
  100% {
    opacity: 1;
  }
}

@media only screen and (max-width: 600px) {
  .glowing-btn{
    font-size: 1em;
  }
}
.post-content h2,
.post-content p {
    margin: 0;
}



       </style>
        <script>
    function showAlertAndRedirect() {
      alert("Anda harus login untuk memberi like atau komentar.");
      window.location.href = "register.php"; // Replace with the actual register page URL
    }
  </script>
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


      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Hai! Selamat Datang Di Galeri Foto</h2>
          <p>Web galeri foto adalah situs web yang dirancang khusus untuk menampilkan dan mengorganisir koleksi foto secara online.</p>
          <br>
          <p>Silahkan Login / Register Terlebih Dahulu.</p>
          <button class='glowing-btn' onclick="window.location.href='login.php'"style="margin-right:30px"><span class='glowing-txt'>L<span class='faulty-letter'>O</span>GIN</span></button>
          <button class='glowing-btn' onclick="window.location.href='register.php'"style="margin-left:30px"><span class='glowing-txt'>RE<span class='faulty-letter'>GI</span>STER</span></button>
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
    <div class="col-md-3">
        <div class="post">
            <img src="gambar/<?=$data['lokasifile']?>" alt="<?=$data['judulfoto']?>">
            <div class="post-content">
            <h2><?=$data['judulfoto']?></h2>
                  <p>Posted by: <?=$data['username']?></p>
                  <br>
                  <p>Description: <?=$data['deskripsifoto']?></p>
                  <a href="#" data-bs-toggle="modal" data-bs-target="#fullDescriptionModal<?=$data['fotoid']?>">Selengkapnya</a>
</div>

<!-- Modal untuk deskripsi lengkap -->
<div class="modal fade" id="fullDescriptionModal<?=$data['fotoid']?>" tabindex="-1" aria-labelledby="fullDescriptionModalLabel<?=$data['fotoid']?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fullDescriptionModalLabel<?=$data['fotoid']?>">Deskripsi Lengkap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                        <p style="color: black;">Pengunggah Gambar : <span class="badge bg-secondary"><?php echo $data['namalengkap'] ?></span></p>
                        <p style="color: black;">Tanggal Unggah : <span class="badge bg-secondary"><?php echo $data['tanggalunggah'] ?></span></p>
                        <hr style="color: black;">
                        <strong style="color: black;">Deskripsi Gambar</strong><br>
                        <p style="color: black;"><?php echo $data['deskripsifoto'] ?></p>
                        <hr style="color: black;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
            <hr>
            <div class="post-actions">
    <?php
    if (isset($_SESSION['userid'])) {
        // User is logged in, allow liking and commenting
        echo '<a href="like.php?fotoid=' . $data['fotoid'] . '">Like (' . $likeCount . ')</a> || ';
        echo '<a href="komentar.php?fotoid=' . $data['fotoid'] . '">Komentar</a>';
    } else {
        // User is not logged in, show alert and redirect to register page
        echo '<a href="javascript:void(0);" onclick="showAlertAndRedirect()">Like </a> || ';
        echo '<a href="javascript:void(0);" onclick="showAlertAndRedirect()">Komentar</a>';
    }
    ?>
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