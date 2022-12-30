<?php
	
	include '../function.php';

    if ($_POST){
        $keterangan = $_POST['keterangan'];
        $hasil = insert('keterangan',"'', '$keterangan'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Keterangan Berhasil ditambahkan"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

