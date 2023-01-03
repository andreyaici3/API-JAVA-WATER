<?php

include '../function.php';
require '../vendor/autoload.php';

use Dompdf\Dompdf as Dompdf;


$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

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