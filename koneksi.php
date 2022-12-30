<?php

$koneksi = mysqli_connect("localhost", "root", "" , "db_kp");

if (!$koneksi){
    echo "Koneksi Gagal";
    die;
}
?>