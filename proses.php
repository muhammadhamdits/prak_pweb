<?php
require_once("config.php");

if(isset($_POST['login1'])){
  $user   = $db->real_escape_string($_POST['username']);
  $pass   = $db->real_escape_string($_POST['password']);
  $result = $db->query("SELECT nama_user, password_user FROM users WHERE nama_user='$user' && password_user='$pass'");
  if($result->num_rows > 0){
    $_SESSION['username'] = $user;
    echo "sukses";
  } else{
    echo "gagal";
  }
} else if(isset($_POST['tambah1'])){
  $kode   = $db->real_escape_string($_POST['kode']);
  $nama   = $db->real_escape_string($_POST['nama']);
  $jmlh   = $db->real_escape_string($_POST['jumlah']);
  $result = $db->query("INSERT INTO matakuliah VALUES('$kode', '$nama', '$jmlh')");
  if(!$result){
    echo "gagal";
  }
} else if(isset($_POST['edit1'])){
  $kdlm   = $db->real_escape_string($_POST['kdlm']);
  $kode   = $db->real_escape_string($_POST['kode']);
  $nama   = $db->real_escape_string($_POST['nama']);
  $jmlh   = $db->real_escape_string($_POST['jumlah']);
  $result = $db->query("UPDATE matakuliah SET kode_mk='$kode', nama_mk='$nama', jumlah_praktikan='$jmlh' WHERE kode_mk='$kdlm'");
  if(!$result){
    echo "gagal";
  }
}
