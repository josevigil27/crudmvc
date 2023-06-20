<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nuevo Password</label>
            <input type="password" 
                   name="password" 
                   id="password" 
                   class="formulario__input" 
                   placeholder="Tu Nuevo Password">
        </div>

        <input type="submit" value="Actualizar Password" class="formulario__submit">

        <div class="acciones">
            <a href="/" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrate</a>
        </div>
    </form>
</main>