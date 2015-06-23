<?php 

class con extends PDO{//clase con que extiende de la clase pdo(que esta creada por php)
	public function __construct(){
		try {
			parent::__construct("mysql:host=localhost;dbname=carcajadas","root","");//el tipo de la db el local en este caso local host y lo de mas.....
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//esto nos permite capturar cualquier error que se nos pueda presentar y mostrarlos como exepciones

		} catch (Exception $e) {
			$alt=$e->getmessage();
			echo "<script type=\"text/javascript\">alert(\" $alt\");</script>";
		}
		
	}

}
//PDO::ATTR_ERRMODE nos permite mostrar el error y PDO::ERRMODE_EXCEPTION nos permite capturarlo como exepcion

?>



