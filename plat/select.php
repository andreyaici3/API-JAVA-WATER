<?php

include '../function.php';

$data["result"] = [
    "status" => 200,
    "msg" => "Success! Data Plat Berhasil di Ambil",
    "nomorPolisi" => select("nomor_polisi", ""),
    "ket" => select("keterangan", ""),
];

echo json_encode($data);

