<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $strQuery = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
        $result = mysqli_query($koneksi, $strQuery);
        
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0){
             $data["result"] = [
                "status" => 200,
                "msg" => "Success! Login Berhasil",
                "data" => $row
            ];

        } else {
            $data["result"] = [
                "status" => 404,
                "msg" => "Error! Login Gagal"
            ];
        }
       
    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

    ?>