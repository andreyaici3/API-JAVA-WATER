<?php

include '../function.php';

$data["result"] = [
    "status" => 200,
    "msg" => "Success! Data Supir Berhasil di Ambil",
    "driver" => select("users", "role='2'")
];

echo json_encode($data);

