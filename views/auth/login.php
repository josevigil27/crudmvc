<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form method="POST" action="/" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" 
                   name="email" 
                   id="email" 
                   class="formulario__input" 
                   placeholder="Tu Email">
        </div>
        
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" 
                   name="password" 
                   id="password" 
                   class="formulario__input" 
                   placeholder="Tu Password">
        </div>

        <input type="submit" value="Iniciar Sesion" class="formulario__submit">

        <div class="acciones">
            <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrate</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
        </div>
    </form>
</main>