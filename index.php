<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('admin/dist/img/photo1.png'); background-size: cover;">
  <div class="login-box">
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-logo font-weight-bold">Andi Wijaya</p>
        <p class="login-box-msg">Silahkan login untuk melanjutkan</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
          </div>
        </form>
        <p class="mb-1"><a href="backup.html">Lupa password</a></p>
        <p class="mb-0"><a href="register.html">Register</a></p>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>

<?php
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tetapkan username dan password yang valid
    $valid_username = "andi";
    $valid_password = "wijaya";

    // Ambil nilai input username dan password dari form
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Lakukan validasi username dan password
    if ($input_username === $valid_username && $input_password === $valid_password) {
        // Jika login berhasil, redirect ke halaman lain atau lakukan tindakan lainnya
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        echo "<script>alert('Username atau password salah.');</script>";
    }
}
?>
