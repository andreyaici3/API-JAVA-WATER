<?php

	include_once("koneksi.php");
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	class emp{}
	
	if (empty($id)) { 
		echo "Gagal";
	} else {

		$query 	= mysqli_query($con,"SELECT * FROM rekapan WHERE id='".$id."'");
		
		$row 	= mysqli_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->id = $row["id"];
			$response->no_pol = $row["no_pol"];
			$response->tanggal = $row["tanggal"];
            $response->pendapatan = $row["pendapatan"];
            $response->pengeluaran = $row["pengeluaran"];
            $response->sisa = $row["sisa"];
			echo(json_encode($response));
		} else{ 
			echo "Gagal";
		}	
	}
?>