<?php
	
	include '../function.php';

    if ($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5(sha1($_POST['password']));

        $date = date('Y-m-d h:i:s');

        $hasil = insert('users',"'', '$name', '$email' ,'$password', '$date', '2'");
        
        $data["result"] = [
            "status" => 200,
            "msg" => "Success! Data Supir Berhasil ditambahkan"
        ];

    } else {
        $data["result"] = [
            "status" => 403,
            "msg" => "Error! Data Tidak Boleh Kosong"
        ];
    }

    echo json_encode($data);

