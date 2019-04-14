<?php

session_start();
$db = new mysqli("localhost", "root", "", "prakpwebhamdi");
if($db->errno > 0) {
    echo "Koneksi gagal";
    exit;
}