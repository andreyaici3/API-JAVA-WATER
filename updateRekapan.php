<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $id = $_POST['id_rekapan'];
        $id_nopol = $_POST['id_nopol'];
        $tanggal = $_POST['tanggal'];
        $nominal = $_POST['nominal'];
        $keterangan = $_POST['keterangan'];
        $jenis = $_POST['jenis'];
        $user_id = $_POST["user_id"];

        $strQuery = "UPDATE rekapan SET 
                    nomor_polisi_id = '$id_nopol', 
                    tanggal = '$tanggal', 
                    nominal = '$nominal', 
                    keterangan = '$keterangan', 
                    jenis = '$jenis', 
                    users_id = '$user_id' WHERE id = '$id'";
        mysqli_query($koneksi, $strQuery);

        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Rekapan Berhasil Diubah"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

?>