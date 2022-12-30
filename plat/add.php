<?php
	
	include '../function.php';

    if ($_POST){
        $nopol = $_POST['nopol'];
        $hasil = insert('nomor_polisi',"'', '$nopol'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Plat Nomor Berhasil ditambahkan"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

