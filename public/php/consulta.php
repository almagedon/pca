<?php
		require_once("conpdo.php");
		$objdb= new con();

	$sqlc= $objdb->prepare("SELECT * FROM persona");
	$sqlc-> execute();//esto ejecuta la consulta
	
	$res=$sqlc->fetchAll();//esto convierte el resultado de la consulta en un arreglo



	foreach ($res as $key => $value) {
		$ale=$value["nombre"];
		echo "<script type=\"text/javascript\">alert(\" $ale\");</script>";
	}
?>