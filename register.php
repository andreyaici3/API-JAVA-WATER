<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5(sha1($_POST['password']));

        $date = date('Y-m-d h:i:s');

        $strQuery = "INSERT INTO users VALUES ('', '$name', '$email', '$password', '$date', '2')";
        mysqli_query($koneksi, $strQuery);

        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Pendaftaran Berhasil, Silahkan Login"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

?>