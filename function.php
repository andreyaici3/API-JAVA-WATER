<?php

include 'koneksi.php';

function select($tabel, $kondisi)
{
    global $koneksi;

    if ($kondisi != '') {
        $strQuery = "SELECT * FROM $tabel WHERE $kondisi";
    } else {
        $strQuery = "SELECT * FROM $tabel";
    }

    $result = mysqli_query($koneksi, $strQuery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function select_con($field, $tabel, $kondisi)
{
    global $koneksi;

    if ($kondisi != '') {
        $strQuery = "SELECT $field FROM $tabel WHERE $kondisi";
    } else {
        $strQuery = "SELECT $field FROM $tabel";
    }

    $result = mysqli_query($koneksi, $strQuery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert($tabel, $stringData)
{
    global $koneksi;

    $strQuery = "INSERT INTO $tabel VALUES ($stringData)";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function update($tabel, $stringData, $kondisi)
{
    global $koneksi;

    $strQuery = "UPDATE $tabel SET $stringData WHERE $kondisi";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function delete($tabel, $kondisi)
{
    global $koneksi;
    $strQuery = "DELETE FROM $tabel WHERE $kondisi";
    mysqli_query($koneksi, $strQuery);

    return true;
}

function select_sum($jenis, $id)
{
    global $koneksi;
    $strQuery = "SELECT SUM(nominal) AS jumlah FROM rekapan WHERE jenis = '$jenis' AND users_id = '$id'";
    $result = mysqli_query($koneksi, $strQuery);
    return mysqli_fetch_assoc($result);
}

function report($start, $end)
{
    global $koneksi;
    $strQuery = "SELECT 
                tanggal, 
                nomor_polisi.nomor_polisi,
                SUM(CASE WHEN jenis = 'pemasukan' THEN nominal ELSE 0 END) AS sum_pemasukan, 
                SUM(CASE WHEN jenis = 'pengeluaran' THEN nominal ELSE 0 END) AS sum_pengeluaran,  
                SUM(CASE WHEN jenis = 'pemasukan' THEN nominal ELSE 0 END) - SUM(CASE WHEN jenis = 'pengeluaran' THEN nominal ELSE 0 END) AS jml_bersih
            FROM 
                rekapan, nomor_polisi
            WHERE 
                rekapan.nomor_polisi_id = nomor_polisi.id_nopol AND
                tanggal BETWEEN '$start' AND '$end'
            GROUP BY
                tanggal, nomor_polisi
            ORDER BY
                tanggal ASC";
    $result = mysqli_query($koneksi, $strQuery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function hari($date){
	$hari = date('D', strtotime($date));
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}
 