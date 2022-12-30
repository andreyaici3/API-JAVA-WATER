<?php
	
	include '../function.php';

    if ($_POST){
        $nopol = $_POST['nopol'];
        $id = $_POST['id_nopol'];
        $hasil = update('nomor_polisi',"nomor_polisi = '$nopol'", "id_nopol='$id'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Plat Nomor Berhasil di Ubah"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

