<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar</title>
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 text-center">
          <img src="assets/img/logo.png" alt="logo" width="100%" />
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 kotak">
          <form>
            <h2 class="text-center border-head">Daftar</h2>
              <hr class="dropdown-divider mb-3" />
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username (tanpa spasi dan simbol)" required />
            </div>
            <div class="mb-3">
              <label class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control" placeholder="contoh@gmail.com" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Nomor HP</label>
              <input type="text" name="no_hp" class="form-control" placeholder="081122334455" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required />
            </div>
            <!-- <div class="mb-3">
              <label>Tipe User</label>
              <select name="#" class="form-select" required>
                <option value=""></option>
                <option value="user">user</option>
              </select>
            </div> -->
            <div class="d-grid gap-2 mt-3">
              <button type="submit" class="btn btn-dark" name="add_data">Daftar</button>
            </div>
            <div class="mb-3 mt-3">
              <p>Sudah punya akun? <a href="masuk.php" class="text-dark fw-bold">Masuk</a></p>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-md-4">
          <a href="index.php" class="text-white text-decoration-none"> <i class="bi bi-chevron-left"></i> Beranda </a>
        </div>
      </div>
    </div>
  </body>
</html>
