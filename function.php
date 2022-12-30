<?php

include 'koneksi.php';

function select($tabel, $kondisi){
    global $koneksi;
    
    if ($kondisi != ''){
        $strQuery = "SELECT * FROM $tabel WHERE $kondisi";
    } else {
        $strQuery = "SELECT * FROM $tabel";
    }

    $result = mysqli_query($koneksi, $strQuery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert($tabel, $stringData){
    global $koneksi;

    $strQuery = "INSERT INTO $tabel VALUES ($stringData)";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function update($tabel, $stringData, $kondisi){
    global $koneksi;

    $strQuery = "UPDATE $tabel SET $stringData WHERE $kondisi";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function delete($tabel, $kondisi){
    global $koneksi;
    $strQuery = "DELETE FROM $tabel WHERE $kondisi";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function select_sum($jenis, $id){
    global $koneksi;
    $strQuery = "SELECT SUM(nominal) AS jumlah FROM rekapan WHERE jenis = '$jenis' AND users_id = '$id'";
    $result = mysqli_query($koneksi, $strQuery);
    return mysqli_fetch_assoc($result);
}


