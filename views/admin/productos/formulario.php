<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Datos del Producto</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre Producto"
            value="<?php echo $producto->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoría Producto</label>
        <select
            class="formulario__select"
            id="categoria"
            name="categoria_id"
        >
            <option value="">- Seleccionar -</option>
            <?php foreach($categorias as $categoria) { ?>
                <option <?php echo ($producto->categoria_id === $categoria->id) ? 'selected' : '' ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>
    </div>  
</fieldset>


<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Producto</legend>

    <div class="formulario__campo">
        <label for="cantidad" class="formulario__label">Cantidad</label>
        <input
            type="number"
            min="1"
            class="formulario__input"
            id="cantidad"
            name="cantidad"
            placeholder="Cantidad Prodcuto"
            value="<?php echo $producto->cantidad ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio</label>
        <input
            type="number"
            step="0.01"
            min="0"
            class="formulario__input"
            id="precio"
            name="precio"
            placeholder="Precio Producto"
            value="<?php echo $producto->precio ?? ''; ?>"
        >
    </div>
</fieldset>