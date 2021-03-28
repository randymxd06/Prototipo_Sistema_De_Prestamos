<?php

//Incluyo las funciones//
require_once "funciones/funciones.php";

//Título de la página//
$nombrePagina = "Login";

//Incluyo el modelo del login//
require_once "modelos/modelo_login.php";

//Declaro las variables//
$btnIngresar = $_POST['btnIngresar'] ?? "";

//Intentamos hacer//
try{

    /*Nos aseguramos de que el usuario haya
    hecho click en el boton ingresar*/
    if(isset($_POST['btnIngresar'])){

        //Redirecciono a la página principal//
        redireccionar("principal.php");

    }else{//Caso contrario no le ha dado click al boton ingresar//

        //Muestro el login//
        include_once "vistas/vista_login.php";

    }

}catch(Exception $e){//Si no se pudo hacer entonces//

    //Mandamos un error//
    $error = $e->getMessage();

}