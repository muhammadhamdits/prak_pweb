<?php
require_once("_header.php");
?>

  <!-- BEGIN CONTENT -->
  <div class="row">
    <!-- BEGIN Left Content -->
    <div class="col-4 d-flex align-items-stretch">
      <div class="card text-white bg-info ">
        <div class="card-header">Sidebar</div>
        <div class="card-body">
          <h5 class="card-title text-center">Login here</h5>
          <form action="proses.php" id="formLogin">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="username" id="username" placeholder="Your username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary form-control mb-4" name="login" id="login">Login</button>
            </div>
          </form>
          <h5 class="card-title text-center">Keterangan Login Default</h5>
          <ul class="list-group">
            <li class="list-group-item list-group-item-primary"><b>Username</b> -> Nomor Induk Mahasiswa</li>
            <li class="list-group-item list-group-item-primary"><b>Password</b> -> Nomor Anggota Coder's Guild</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END Left Content -->

    <!-- BEGIN Main Content -->
    <div class="col-8 d-flex align-items-stretch">
      <div class="card text-white bg-info">
        <div class="card-header">Main Content</div>
        <div class="card-body">
          <h5 class="card-title">Selamat Datang,</h5>            
          <p class="card-text">Website ini akan membantu anda melaksanakan proses upgrading.</p>
          <img class="card-img-top mb-2" src="assets/img/img-1.jpg" alt="Praktikum">
        </div>
      </div>
    </div>
    <!-- END Main Content -->
  </div>
  <!-- END CONTENT -->

<?php
require_once("_footer.php");
?>