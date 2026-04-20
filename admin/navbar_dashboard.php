<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <!-- <link rel="stylesheet" href="../assets/css/da"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <!-- OffCanvas Trigger -->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- OffCanvas Trigger -->
        <a class="navbar-brand fw-bold text-uppercase" href="#">WOKSHOP</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="navbar" id="navbarSupportedContent">
          <form class="d-flex ms-auto" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button> -->
          </form>

          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="admin_profil.php">Profil</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- OffCanvas -->
    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <!-- <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div> -->
      <div class="offcanvas-body p-0 mt-3">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="dashboard.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-speedometer2"></i>
                </span>
                <span>Beranda</span>
              </a>
            </li>
            <li>
              <a href="game_view.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-controller"></i>
                </span>
                <span>Game</span>
              </a>
            </li>
            <li>
              <a href="tagihan_view.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-receipt"></i>
                </span>
                <span>Tagihan</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-credit-card"></i>
                </span>
                <span>Pembayaran</span>
              </a>
            </li>
            <li>
              <a href="pelanggan_view.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-people-fill"></i>
                </span>
                <span>Pelanggan</span>
              </a>
            </li>
            <li>
              <a href="bank_view.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-bank"></i>
                </span>
                <span>Bank</span>
              </a>
            </li>
            <li>
              <a href="admin_view.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-person-workspace"></i>
                </span>
                <span>Admin</span>
              </a>
            </li>

            <!-- <li class="my-4">
              <hr class="dropdown-divider" />
            </li>

            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">Interface</div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layout</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>
              <div class="collapse" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="#" class="nav-link px-3">
                        <span class="me-2">
                          <i class="bi bi-layout-split"></i>
                          <span>haha</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li> -->
          </ul>
        </nav>
      </div>
    </div>