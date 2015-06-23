<?php //si seleccionas el boton submit del metodo post
	include("conec_db.php");

	$nombre		=$_POST["nombre"]; //en la variavle luego del $______ va el name del input $_POST["name"];
	$apellido	=$_POST['apellido'];
	$telefono	=$_POST['telefono'];
	$email		=$_POST['emai'];
	$contrasena	=$_POST['contrasena'];
	$rcontrasena=$_POST['rcontrasena'];
	

	if ($link){
				
				$sql="INSERT INTO personas  VALUES ('$nombre','$apellido','$telefono','$email','$contrasena');";
				$rs=mysql_query($sql,$link) or die(mysql_error());

				echo "<script type=\"text/javascript\">alert(\"Listo papa...!\");</script>";

			} else {
				echo "ocurrio un error al mover el archivo.";
			}


?>