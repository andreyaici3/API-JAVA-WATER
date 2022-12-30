<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $id = $_POST['id_rekapan'];
        $strQuery = "DELETE FROM rekapan WHERE id = '$id'";
        mysqli_query($koneksi, $strQuery);

        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Rekapan Berhasil Dihapus"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Rekapan Gagal Dihapus"
        ];
    }

    echo json_encode($data);

?>