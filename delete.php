<?php
require_once('config.php');
$kode   = $db->real_escape_string($_POST['kode']);
$result = $db->query("DELETE FROM matakuliah WHERE kode_mk='$kode'");
if(!$result){
  echo "gagal";
}