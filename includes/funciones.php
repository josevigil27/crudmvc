<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Registro Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Registro Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Registro Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}
function pagina_actual($path) : bool {
    return str_contains($_SERVER['PATH_INFO'], $path ) ? true : false;
}
function is_auth() : bool {
    session_start();
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}
function is_admin() : bool {
    session_start();
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}