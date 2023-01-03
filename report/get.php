<?php

include '../function.php';

if ($_POST){
    $start = $_POST['start'];
    $end = $_POST['end'];

    $data["result"] = [
        "status" => 200,
        "msg" => "Success! Data Plat Berhasil di Ambil",
        "report" => report($start, $end)
    ];

} else {
    $data["result"] = [
        "status" => 403,
        "msg" => "Error! Data Tidak Boleh Kosong"
    ];
}

echo json_encode($data);
