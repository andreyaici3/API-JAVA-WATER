<?php

include '../function.php';

$data["result"] = [
    "status" => 200,
    "msg" => "Success! Data Keterangan Berhasil di Ambil",
    "nomorPolisi" => select("keterangan", "")
];

echo json_encode($data);

