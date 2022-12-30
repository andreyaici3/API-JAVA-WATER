<?php
	
	include_once("koneksi.php");
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	
	if (empty($id)) { 

		echo "Gagal";

	} else {
		$query = mysqli_query($con,"DELETE FROM rekapan WHERE id = '".$id."'");
		
		if ($query) {
			echo "Terhapus";
			
		} else{ 
			echo "Gagal";
			
		}	
	}
?>