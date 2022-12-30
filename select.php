<?php

include 'function.php';

if (isset($_GET['select'])) {
    if ($_GET["select"] == "nopol"){
        // $hasil["nomorPolisi"] = select_nopol();
        echo json_encode($hasil);
    } else if ($_GET["select"] == "keterangan"){
        // $hasil["nomorPolisi"] = select_nopol();
        // $hasil["ket"] = select_keterangan();
        echo json_encode($hasil);
    }
} else {
    
}
