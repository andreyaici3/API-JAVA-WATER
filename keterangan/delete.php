<?php
	
	include '../function.php';

    if ($_POST){
        $id = $_POST['id_keterangan'];
        $hasil = delete('keterangan',"id_keterangan='$id'");
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Keterangan Berhasil di Hapus"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }
    
    echo json_encode($data);

