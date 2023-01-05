<?php

include '../function.php';
require '../vendor/autoload.php';

@$jenis = $_GET["type"];

$postdata = http_build_query(
    array(
        'tanggal' => $_GET["tanggal"]
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

/* Rekapan perbulan dulu */



use Dompdf\Dompdf as Dompdf;


$dompdf = new Dompdf();
$dompdf->loadHtml(file_get_contents($URL_PATH_REPORT, false, $context));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('F4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));





// if ($_POST){
//     $start = $_POST['start'];
//     $end = $_POST['end'];

//     $data["result"] = [
//         "status" => 200,
//         "msg" => "Success! Data Plat Berhasil di Ambil",
//         "report" => report($start, $end)
//     ];

// } else {
//     $data["result"] = [
//         "status" => 403,
//         "msg" => "Error! Data Tidak Boleh Kosong"
//     ];
// }

// echo json_encode($data);

// $path = "../file/02.pdf";
// // 
// $myFile = fopen($path, "r");

// echo fread($myFile, filesize($path));
// fclose($myFile);
// 

// $rootDir = ;

// var_dump($rootDir);