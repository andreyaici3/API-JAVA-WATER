<?php
	
	include '../function.php';

    if ($_POST){
        $id_nopol = $_POST['id_nopol'];
        $tanggal = $_POST['tanggal'];
        $nominal = $_POST['nominal'];
        $keterangan = $_POST['keterangan'];
        $jenis = $_POST['jenis'];
        $user_id = $_POST["user_id"];
        $hasil = insert('rekapan',"'', '$id_nopol', '$tanggal', '$nominal', '$keterangan', '$jenis', '$user_id'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data $jenis Berhasil ditambahkan"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

