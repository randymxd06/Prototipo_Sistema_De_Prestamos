<?php

//Función para redireccionar las páginas//
function redireccionar($ruta){
    header("Location: {$ruta}", true, 303);
}