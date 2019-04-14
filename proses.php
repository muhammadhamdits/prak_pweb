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
}
