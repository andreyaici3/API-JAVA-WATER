<?php
	
	include '../function.php';

    if ($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id_supir = $_POST['id_supir'];
        $password = md5(sha1($_POST['password']));

        $date = date('Y-m-d h:i:s');

        $hasil = update('users',"
            name = '$name', 
            email ='$email'",
            "id='$id_supir'"
        );
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Supir Berhasil di Ubah"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

