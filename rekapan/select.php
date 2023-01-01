<?php

include '../function.php';

if ($_POST){
    $id_users = $_POST['id_supir'];

    $data["result"] = [
        "status" => 200,
        "msg" => "Success! Data Plat Berhasil di Ambil",
        "rekapan" => select_con("rekapan.*, nomor_polisi.*, users.*, rekapan.id AS id_rekapan", "rekapan, nomor_polisi, users" ,"rekapan.nomor_polisi_id = nomor_polisi.id_nopol AND rekapan.users_id = users.id AND users_id = $id_users"),    
        "pengeluaran" => select_sum('pengeluaran', $id_users),
        "pemasukan" => select_sum('pemasukan', $id_users)
    ];

} else {
    $data["result"] = [
        "status" => 403,
        "msg" => "Error! Data Tidak Boleh Kosong"
    ];
}

echo json_encode($data);
