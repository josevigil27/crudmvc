<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\ProductosController;
use MVC\Router;

$router = new Router();


// Login
$router->get('/', [AuthController::class, 'login']);
$router->post('/', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area de administracion
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Area de productos
$router->get('/admin/productos', [ProductosController::class, 'index']);
$router->get('/admin/productos/crear', [ProductosController::class, 'crear']);
$router->post('/admin/productos/crear', [ProductosController::class, 'crear']);
$router->get('/admin/productos/actualizar', [ProductosController::class, 'actualizar']);
$router->post('/admin/productos/actualizar', [ProductosController::class, 'actualizar']);
$router->post('/admin/productos/eliminar', [ProductosController::class, 'eliminar']);

$router->comprobarRutas();