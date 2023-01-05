<?php

include '../function.php';
require '../vendor/autoload.php';

@$jenis = $_GET["type"];


/* Rekapan perbulan dulu */
if ($jenis == "month"){
    $tg = "2022-12-01";
    $month = date("m", strtotime($tg));
    $year = date("Y", strtotime($tg));
    $d=cal_days_in_month(CAL_GREGORIAN,$month,$year);

    $nopol = select("nomor_polisi", "");
    $report = report("2022-12-01", "2022-12-$d");
    
    for($i=1; $i<=$d; $i++){
        $tgl[] = ($i<10) ? "$year-$month-" ."0". $i : "$year-$month-". $i;
    }
    /* Get All Days */
    
    
    // var_dump($report);
    $index = 0;
    $arrayBaru = [];
    foreach ($report as $key) {
        $arrayBaru[$key["tanggal"]][] = $key;
    }
    


/* Get All Days */


    
    
} else {
    $html = "aa";
}



use Dompdf\Dompdf as Dompdf;


$dompdf = new Dompdf();
$dompdf->loadHtml(file_get_contents($URL_PATH_REPORT));

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