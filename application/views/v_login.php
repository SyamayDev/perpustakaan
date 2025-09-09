<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- bootstrap css-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
  <!-- jquery -->
  <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  <!-- bootstrap js-->
  <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</head>
<body style="background: linear-gradient(135deg, #1f1c2c, #928dab); min-height:100vh; display:flex; align-items:center; justify-content:center;">

  <div class="container">
    <h3 style="font-weight:normal; text-align:center; color:white; margin-top:30px;">SISTEM INFORMASI</h3>
    <h2 style="font-weight:normal; text-align:center; color:#007bff; margin-bottom:40px;"><b>PERPUSTAKAAN</b></h2>

    <div class="col-md-4 offset-md-4">
      <div class="card" style="background: rgba(255, 255, 255, 0.15); border-radius:16px; box-shadow:0 8px 32px 0 rgba(31,38,135,0.37); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border:1px solid rgba(255,255,255,0.18);">
        <div class="card-body" style="padding:30px;">
          <?php 
          if(isset($_GET['alert'])) {
              if($_GET['alert']=='gagal') {
                  echo "<div class='alert alert-danger font-weight-normal text-center'>Login Gagal! username dan password salah!</div>";
              } else if($_GET['alert']=='logout') {
                  echo "<div class='alert alert-success font-weight-normal text-center'>Anda telah berhasil logout</div>";
              } else if($_GET['alert']=='belum_login') {
                  echo "<div class='alert alert-danger font-weight-normal text-center'>Anda harus login untuk mengakses halaman admin</div>";
              }
          }
          ?>

          <h4 style="font-weight:bold; text-align:center; margin-bottom:20px; color:white;">LOGIN</h4>
          <!-- validasi error -->
          <?php  echo validation_errors(); ?>

          <form action="<?php echo site_url('login/login_aksi'); ?>" method="post">
            <div class="form-group">
              <label for="username" style="color:white;">Username :</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required style="background: rgba(255,255,255,0.2); border:1px solid rgba(255,255,255,0.3); color:white;">
            </div>
            <div class="form-group">
              <label for="password" style="color:white;">Password :</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required style="background: rgba(255,255,255,0.2); border:1px solid rgba(255,255,255,0.3); color:white;">
            </div>
            <div class="form-group">
              <label for="sebagai" style="color:white;">Login Sebagai :</label>
              <select class="form-control" id="sebagai" name="sebagai" style="background: rgba(255,255,255,0.2); border:1px solid rgba(255,255,255,0.3); color:white;">
                <option value="admin" style="color:black;">Admin</option>
                <option value="petugas" style="color:black;">Petugas</option>
              </select>
            </div>
            <div style="text-align:center; margin-top:25px;">
              <button type="submit" class="btn btn-primary" style="padding:10px 40px; border-radius:25px; box-shadow:0 4px 15px rgba(0,0,0,0.2);">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
