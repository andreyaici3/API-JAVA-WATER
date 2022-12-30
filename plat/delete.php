<?php
	
	include '../function.php';

    if ($_POST){
        $id = $_POST['id_nopol'];
        $hasil = delete('nomor_polisi',"id_nopol='$id'");
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Plat Nomor Berhasil di Hapus"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }
    
    echo json_encode($data);

