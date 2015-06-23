<?php
    require_once("lib/config.php");

    if(isset($_SESSION["ses_id"]))
    {
           if(!empty($_GET["accion"]))
            {
                $accion=$_GET["accion"];
            }else
            {
                $accion="index";
            }
            
            if(is_file("controller/".$accion."Controller.php"))//esto lee el nombre del archivo para obiar la palabra controller
                                                                //y delimitar si existe
            {
                require_once("controller/".$accion."Controller.php");
            }else//de lo contrario mandar a el controller de error
            {
                require_once("controller/errorController.php");
            } 
    }else
    {
     
            if(!empty($_GET["accion"]))//aqui se pregunta si el accion esta vacio atraves de la etiqueta !empty
            {
                $accion=$_GET["accion"];
            }else
            {
                $accion="index";
            }
            
            if(is_file("controller/".$accion."Controller.php"))
            {
                require_once("controller/".$accion."Controller.php");
            }else
            {
                require_once("controller/errorController.php");
            } 

        
    }




?>