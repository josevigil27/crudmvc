<h1 class="text-center"><?php echo $titulo?></h1>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/productos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Producto
    </a>
</div>

    <?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alerta alerta__exito"><?php echo s($mensaje); ?></p>
            <?php } 
        }
    ?>

<div class="dashboard__contenedor">
    <?php if(!empty($productos)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Categoria</th>
                    <th scope="col" class="table__th">Cantidad</th>
                    <th scope="col" class="table__th">Precio</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach ($productos as $producto) {?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $producto->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $producto->categoria->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $producto->cantidad; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $producto->precio; ?>
                        </td>
                        <td>
                            <a class="table__accion table__accion--editar" href="/admin/productos/actualizar?id=<?php echo $producto->id; ?>">
                            <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/productos/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">Sin Registros</p>
    <?php }  ?>
</div>

<?php
    echo $paginacion;
?>