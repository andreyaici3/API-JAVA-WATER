<?php
	
	include '../function.php';

    if ($_POST){
        $id_supir = $_POST['id_supir'];
        $hasil = delete('users',"id='$id_supir'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Supir Berhasil di Hapus"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

