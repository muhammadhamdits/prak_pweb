<?php
  require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- BEGIN Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- END Meta Tags -->

  <!-- BEGIN CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/icon.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <link rel="stylesheet" href="assets/css/datatables.min.css">
  <!-- END CSS -->

  <!-- BEGIN Icon -->
  <link rel="shortcut icon" type="image/png" href="assets/favicon.ico" />
  <!-- END Icon -->

  <!-- BEGIN Title -->
  <title>Tugas - Praktikum Pemgrograman Web</title>
  <!-- END Title -->
  <!-- BEGIN Javascript -->
  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <script src="assets/js/datatables.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- END Javascript -->
</head>

<body>
  <div class="container">
    <!-- BEGIN HEADER -->
    <div class="card bg-info text-white mb-1">
      <img class="card-img" src="assets/img/header.png" alt="Card image">
    </div>
    <!-- END HEADER -->

  <!-- BEGIN CONTENT -->
  <div class="row">
    <!-- BEGIN Left Content -->
    <div class="col-3 d-flex align-items-stretch" id="leftNav">
      <div class="card text-white bg-info">
        <div class="card-header">Sidebar</div>
        <div class="card-body">
          <?php 
            if(!isset($_SESSION['username'])){ ?>
              <h5 class="card-title text-center">Login here</h5>
              <form id="formLogin">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" name="username" id="username" placeholder="Your username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="hidden" name="login1" value="login1">
                  <button type="submit" class="btn btn-info form-control mb-4" name="login" id="login">Login</button>
                </div>
              </form>
              <h5 class="card-title text-center">Keterangan Login Default</h5>
              <ul class="list-group">
                <li class="list-group-item list-group-item-info"><b>Username</b> -> Nomor Induk Mahasiswa</li>
                <li class="list-group-item list-group-item-info"><b>Password</b> -> Nomor Anggota Coder's Guild</li>
              </ul> <?php
            } else{ ?>
              <p class="card-text hidden" style="margin-top:-63px; position:relative; z-index: -1;"> .............................................................  sssssssss.</p>
              <h5 class="card-title text-center mb-4">Welcome, <?= $_SESSION['username']; ?></h5>
              <a href="index.php" class="btn btn-info form-control text-left"><i class="material-icons">home</i><p> Home</p></a>
              <a href="data.php" class="btn btn-info form-control text-left"><i class="material-icons">table_chart</i><p> Data</p></a>
              <a href="logout.php" class="btn btn-info form-control text-left"><i class="material-icons">highlight_off</i><p> Logout</p></a>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
    <!-- END Left Content -->