<?php

include '../function.php';

if ($_POST){
    $tanggal = $_POST['tanggal'];

    $data["result"] = [
        "status" => 200,
        "msg" => "Success! Data Plat Berhasil di Ambil",
        "rekapan" => select_con("rekapan.*, nomor_polisi.*, users.*, rekapan.id AS id_rekapan", "rekapan, nomor_polisi, users" ,"rekapan.nomor_polisi_id = nomor_polisi.id_nopol AND rekapan.users_id = users.id AND tanggal='$tanggal'"),    
        "pengeluaran" => select_sum2('pengeluaran', $tanggal),
        "pemasukan" => select_sum2('pemasukan', $tanggal)
    ];

} else {
    $data["result"] = [
        "status" => 403,
        "msg" => "Error! Data Tidak Boleh Kosong"
    ];
}

echo json_encode($data);

