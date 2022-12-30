<?php
	
	include '../function.php';

    if ($_POST){
        $email = $_POST['email'];
        $password = md5(sha1($_POST['password']));

        $strKondisi = "email='$email' AND password='$password'";
        $hasil = select("users", $strKondisi);

        if ($hasil != null){
            $data["result"] = [
                "status" => 200,
                "msg" => "Berhasil",
                "data" => $hasil
            ];
        } else {
            $data["result"] = [
                "status" => 403,
                "msg" => "Maaf, Login Gagal, Username / Password Salah"                
            ];
        }
       
    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);
