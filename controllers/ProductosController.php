<?php

namespace Controllers;

use Classes\Paginacion;
use MVC\Router;
use Model\Producto;
use Model\Categoria;

class ProductosController {
    public static function index(Router $router) {
        if(!is_admin()) {
            header('Location: /');
        }

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1) {
            header('Location: /admin/productos?page=1');
        }

        $registros_por_pagina = 10;
        $total = Producto::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        if($paginacion->total_paginas() < $pagina_actual) {
            header('Location: /admin/productos?resultado=1&page=1');
        }

        $productos = Producto::paginar($registros_por_pagina, $paginacion->offset());

        foreach($productos as $producto) {
            $producto->categoria = Categoria::find($producto->categoria_id);
        }

        $router->render('admin/productos/index', [
            'titulo' => 'Productos',
            'resultado' => $resultado,
            'productos' => $productos,
            'paginacion' => $paginacion->paginacion()
        ]);
    }

    public static function crear(Router $router) {
        if(!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $categorias = Categoria::all('ASC');
        $producto = new Producto;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto->sincronizar($_POST);

            // Validar
            $alertas = $producto->validar();

            // Guardar el registro
            if(empty($alertas)) {

                // Guardar en la BD
                $resultado = $producto->guardar();

                if($resultado) {
                    header('Location: /admin/productos?resultado=1&page=1');
                }
            }
        }

        $router->render('admin/productos/crear', [
            'titulo' => 'Registrar Producto',
            'alertas' => $alertas,
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }

    public static function actualizar(Router $router) {

        if(!is_admin()) {
            header('Location: /');
            return;
        }

        $alertas = [];

        // Vaidar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id) {
            header('Location: /admin/productos');
        }

        $categorias = Categoria::all('ASC');

        // Obtener producto a Editar
        $producto = Producto::find($id);

        if(!$producto) {
            header('Location: /admin/productos');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto->sincronizar($_POST);

            // Validar
            $alertas = $producto->validar();

            // Guardar el registro
            if(empty($alertas)) {

                // Guardar en la BD
                $resultado = $producto->guardar();

                if($resultado) {
                    header('Location: /admin/productos?resultado=2&page=1');
                }
            }
        }

        $router->render('admin/productos/actualizar', [
            'titulo' => 'Actualizar Producto',
            'alertas' => $alertas,
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }

    public static function eliminar() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            if(!is_admin()) {
                header('Location: /');
                return;
            }
            
            $id = $_POST['id'];
            $producto = Producto::find($id);
            
            if(!isset($producto) ) {
                header('Location: /admin/productos');
                return;
            }
            $resultado = $producto->eliminar();
            if($resultado) {
                header('Location: /admin/productos?resultado=3&page=1');
            }

        }

    }

}