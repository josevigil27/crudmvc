<?php 

namespace Model;

class Producto extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'nombre', 'categoria_id', 'cantidad', 'precio'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->categoria_id = $args['categoria_id'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->categoria_id) {
            self::$alertas['error'][] = 'La Categoria es Obligatoria';
        }
        if(!$this->cantidad) {
            self::$alertas['error'][] = 'La Cantidad es Obligatoria';
        }
        if(!$this->precio) {
            self::$alertas['error'][] = 'El Precio es Obligatorio';
        }
    
        return self::$alertas;
    }
}