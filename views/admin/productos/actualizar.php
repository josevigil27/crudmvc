<h1 class="text-center"><?php echo $titulo?></h1>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/productos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php
        include_once __DIR__ . './../../templates/alertas.php'
    ?>

    <form method="post" enctype="multiport/form-data" class="formulario">
        
        <?php include_once __DIR__ . '/formulario.php'; ?>
        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Actualizar Producto">
    
    </form>
</div>