<?php

include '../function.php';
$tanggal = $_POST["tanggal"];


$data["result"] = [
    "status" => 200,
    "msg" => "Success! Data Rekapan Berhasil di Ambil",
    "rekapan" => select("rekapan, users, nomor_polisi", "tanggal='$tanggal' AND rekapan.users_id = users.id AND rekapan.nomor_polisi_id = nomor_polisi.id_nopol"),
];

echo json_encode($data);

