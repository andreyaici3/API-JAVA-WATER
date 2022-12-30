<?php
	
	include_once("koneksi.php");

    if ($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5(sha1($_POST['password']));
        $id = $_POST['id'];


        $strQuery = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'";
        mysqli_query($koneksi, $strQuery);

        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Berhasil Di Ubah"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

?>