<?php

include '../function.php';

$tg = $_POST["tanggal"];
$month = date("m", strtotime($tg));
$year = date("Y", strtotime($tg));
$d=cal_days_in_month(CAL_GREGORIAN,$month,$year);

$nopol = select("nomor_polisi", "");
$report = report("$year-$month-01", "$year-$month-$d");





/* Get All Days */
for($i=1; $i<=$d; $i++){
    $tgl[] = ($i<10) ? "$year-$month-" ."0". $i : "$year-$month-". $i;
    
}
/* Get All Days */


// var_dump($report);
$index = 0;
$arrayBaru = [];
$jmlBersih = 0;
$a = 0;
$totalBersih = 0;
foreach ($report as $key) {
    $arrayBaru[$key["tanggal"]][] = $key;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapan Akhir</title>
</head>

<body>
        <center>
        <h3>REKAPAN AKHIR BULAN <?= $month . " " .$year?> </h3>
        </center>

        <table border="1">
            <tr>
                <td>TANGGAL</td>
                
                <td>HARI</td>
                <?php foreach ($nopol as $key) : ?>
                    <td><?php
                        
                        echo $key["nomor_polisi"];
                        
                        ?></td>
                <?php endforeach; ?>
                <td>Jumlah</td>

            </tr>
            <?php
            
            $t = 1;
            foreach ($tgl as $key) : ?>
                <tr>
                    <td>
                    <?= $t ?>
                    </td>
                    <td>
                        <?= hari($key) ?>
                    </td>
                    
                    <?php
                     foreach($nopol as $k) : ?>

                    <td>
                        <?php 
                        if (isset($arrayBaru[$key])){
                            foreach ($arrayBaru[$key] as $arr) {
                                if ($arr["nomor_polisi"] == $k["nomor_polisi"]) {
                                    echo number_format($arr["jml_bersih"]);
                                    $jmlBersih = $jmlBersih + $arr["jml_bersih"];
                                } 
                           }                       
                        }
                           
                        ?>
                    </td>
                    

                    <?php
                        endforeach; ?>
                    
                    <td>
                        <?= ($jmlBersih == 0) ? "" : number_format($jmlBersih) ?>
                    </td>
                </tr>
            <?php 
            $t++;
            $jmlBersih = 0;
            endforeach; ?>
            <tr>
                <td colspan="2">Jumah</td>
                <?php foreach($nopol as $j): ?>
                    <td>
                    <?php 
                        foreach ($tgl as $tg){
                            if (isset($arrayBaru[$tg])){
                                foreach ($arrayBaru[$tg] as $arr) {
                                    if ($arr["nomor_polisi"] == $j["nomor_polisi"]) {
                                        $a += $arr["jml_bersih"];
                                        $totalBersih += $arr["jml_bersih"];
                                    } 
                                     
                               }                       
                            }
                        }                           
                        ?>
                        <?= number_format($a) ?>
                    </td>
                <?php $a=0; endforeach; ?>
                <td><?= number_format($totalBersih) ?></td>
            </tr>
        </table>
    

</body>

</html>

