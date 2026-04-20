<?php
  session_start();
  include "db/koneksi.php";

  $query = "SELECT * FROM game";
  $res = mysqli_query($con,$query);
  $countData   = mysqli_num_rows($res);

  $getIdPelanggan = $_GET['id_pelanggan'];

  include("navbar.php");
?>

    <!-- Carousel -->
    <section id="carousel">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video loop="true" autoplay="true" class="d-block w-100" muted>
                    <source src="assets/img/carousel/wokshop_slide1.mp4" type="video/mp4"  alt="Slider1" />
                  </video>
                </div>
                <div class="carousel-item">
                  <video loop="true" autoplay="true" class="d-block w-100" muted>
                    <source src="assets/img/carousel/wokshop_slide2.mp4" type="video/mp4" alt="Slider2" />
                  </video>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Game -->
    <section id="game">
      <div class="container mt-3">
        <div class="row">
          <div class="col line-heading">
            <h2>Game</h2>
          </div>
        </div>
        <div class="row">
          <?php while($result = mysqli_fetch_array($res)){ ?>
          <div class="col-sm-3 col-lg-2 col-4 text-center p-1">
            <div class="card p-1 mb-0 zoom" style="background: none; border: none">
              <div class="card-body p-1">
                <a href="pelanggan/game_transaksi_view.php?id_game=<?php echo $result["id_game"]; ?>?id_pelanggan=<?=$getIdPelanggan?>" class="text-decoration-none text-white">
                <img src="admin/game_image_view.php?id_game=<?php echo $result["id_game"]; ?>" class="img-fluid mb-2" alt="..." style="border-radius: 10px; display: block" width="150" />
                  <h5 class="card-title"><?php echo $result['nama_game']; ?></h5>
                </a>
              </div>
            </div>
          </div>
          
          <?php } ?>

        </div>
      </div>
    </section>

    <section id="promo">
      <div class="container">
        <div class="row">
          <div class="col"><img src="assets/img/banner_satu.png" class="d-block w-100" alt="promo" srcset=""></div>
        </div>
      </div>
    </section>

    <svg id="wave" style="transform: rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(33, 37, 41, 1)" offset="0%"></stop>
          <stop stop-color="rgba(33, 37, 41, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 0px); opacity: 1"
        fill="url(#sw-gradient-0)"
        d="M0,0L65.5,40L130.9,70L196.4,20L261.8,70L327.3,30L392.7,90L458.2,60L523.6,40L589.1,20L654.5,80L720,20L785.5,80L850.9,10L916.4,50L981.8,20L1047.3,90L1112.7,80L1178.2,50L1243.6,80L1309.1,40L1374.5,90L1440,20L1505.5,70L1570.9,10L1570.9,100L1505.5,100L1440,100L1374.5,100L1309.1,100L1243.6,100L1178.2,100L1112.7,100L1047.3,100L981.8,100L916.4,100L850.9,100L785.5,100L720,100L654.5,100L589.1,100L523.6,100L458.2,100L392.7,100L327.3,100L261.8,100L196.4,100L130.9,100L65.5,100L0,100Z"
      ></path>
    </svg>

    <section class="bg-dark text-white">
      <div class="container">
        <div class="row position-relative">
          <div class="col-md-12 text-center mb-3">
            <h2>WokShop</h2>
            <p>Tempat Top Up game yang murah, aman dan terpercaya di Indonesia dengan berbagai metode pembayaran tersedia, proses transaksi cepat kilat.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4>Informasi</h4>
            <ul class="">
              <li class="m-2">
                <a href="informasi/tentang_kami.php" class="text-decoration-none text-white">Tentang Kami</a>
              </li>
              <li class="m-2">
                <a href="" class="text-decoration-none text-white">Kontak Kami</a>
              </li>
              <li class="m-2">
                <a href="" class="text-decoration-none text-white">Ketentuan Layanan</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Ikuti Kami</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-dark text-white">
                <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none text-white"><i class="bi bi-instagram"></i>&nbsp; Instagram</a>
              </li>
              <li class="list-group-item bg-dark text-white">
                <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none text-white"><i class="bi bi-facebook"></i>&nbsp; Facebook</a>
              </li>
              <li class="list-group-item bg-dark text-white">
                <a href="https://www.twitter.com/" target="_blank" class="text-decoration-none text-white"><i class="bi bi-twitter"></i>&nbsp; Twitter</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Metode Pembayaran</h4>
            <div class="row g-3">
              <div class="col-4">
                <img src="assets/img/pembayaran/bca.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/bni.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/mandiri.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/dana.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/gopay.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/ovo.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/shopay.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
              <div class="col-4">
                <img src="assets/img/pembayaran/qris.png" width="100%" alt="bca" class="bg-white rounded p-1" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
  include("footer.php")
?>