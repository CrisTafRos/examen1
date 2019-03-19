<?php
	function acresMetrosC($acres){
		$metrosCuadrados = $acres * 4046.86;
		echo "Los acres son: ".$acres;
		echo "y en metros cuadrados son: ".$metrosCuadrados;
	}	
	acresMetrosC(100);
?>
