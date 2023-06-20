<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" 
                   name="email" 
                   id="email" 
                   class="formulario__input" 
                   placeholder="Tu Email">
        </div>

        <input type="submit" value="Enviar Instrucciones" class="formulario__submit">

        <div class="acciones">
            <a href="/" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrate</a>
        </div>
    </form>
</main>