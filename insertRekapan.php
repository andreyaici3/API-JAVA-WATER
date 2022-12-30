<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $id_nopol = $_POST['id_nopol'];
        $tanggal = $_POST['tanggal'];
        $nominal = $_POST['nominal'];
        $keterangan = $_POST['keterangan'];
        $jenis = $_POST['jenis'];
        $user_id = $_POST["user_id"];

        $strQuery = "INSERT INTO rekapan VALUES ('', '$id_nopol', '$tanggal', '$nominal', '$keterangan', '$jenis', '$user_id')";
        mysqli_query($koneksi, $strQuery);

        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Rekapan Berhasil Ditambahkan"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

?>