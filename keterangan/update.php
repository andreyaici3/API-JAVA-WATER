<?php
	
	include '../function.php';

    if ($_POST){
        $keterangan = $_POST['keterangan'];
        $id = $_POST['id_keterangan'];

        $hasil = update('keterangan',"keterangan = '$keterangan'", "id_keterangan='$id'");
        
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

