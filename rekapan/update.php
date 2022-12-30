<?php
	
	include '../function.php';

    if ($_POST){
        $id_nopol = $_POST['id_nopol'];
        $tanggal = $_POST['tanggal'];
        $nominal = $_POST['nominal'];
        $keterangan = $_POST['keterangan'];
        $jenis = $_POST['jenis'];
        $user_id = $_POST["user_id"];
        $id_rekap = $_POST["id_rekap"];

        $hasil = update('rekapan',"
            nomor_polisi_id='$id_nopol',
            tanggal='$tanggal',
            nominal='$nominal',
            keterangan='$keterangan'
        ", "id='$id_rekap'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data $jenis Berhasil diubah"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);


    