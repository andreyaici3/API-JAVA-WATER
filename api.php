<?php

    @$endpoint = $_GET["endpoint"];
    if (isset($endpoint)){
        if ($endpoint=="auth"){
            if (isset($_POST["jenis"])=="login"){
                $data["result"] = [
                    "status" => 403,
                    "msg" => "Error! Data Tidak Boleh Kosong"
                ];
            }
        } else {
            $data["result"] = [
                "status" => 403,
                "msg" => "Access Forbbiden"
            ];
        }
    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Access Forbbiden"
        ];
    }

    echo json_encode($data);