<?php

/*--------------------------
    Requiero las funciones
----------------------------*/
// require_once "funciones/";


/*-----------------------
    Título de la página
-------------------------*/
$nombrePagina = "Login";


/*----------------------
    Requiero el modelo
------------------------*/
// require_once "modelos/";


/*-------------------------
    Declaro las variables
---------------------------*/
$btnIngresar = $_POST['btnIngresar'] ?? "";

// try{

//     if(isset($_POST['btnIngresar'])){
//         include_once "vistas/vista_principal.php";
//     }

// }catch(Exception $e){
//     $error = $e->getMessage();
// }


/*------------------------------
    Incluyo la vista_principal
--------------------------------*/
//Al final de cada controlador se incluye la vista//
include_once "vistas/vista_login.php";