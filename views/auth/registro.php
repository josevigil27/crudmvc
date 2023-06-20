<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" 
                   name="nombre" 
                   id="nombre" 
                   class="formulario__input" 
                   placeholder="Tu Nombre"
                   value="<?php echo $usuario->nombre; ?>">
        </div>
        
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" 
                   name="apellido" 
                   id="apellido" 
                   class="formulario__input" 
                   placeholder="Tu Apellido"
                   value="<?php echo $usuario->apellido; ?>">
        </div>
        
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" 
                   name="email" 
                   id="email" 
                   class="formulario__input" 
                   placeholder="Tu Email"
                   value="<?php echo $usuario->email; ?>">
        </div>
        
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" 
                   name="password" 
                   id="password" 
                   class="formulario__input" 
                   placeholder="Tu Password">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input type="password" 
                   name="password2" 
                   id="password2" 
                   class="formulario__input" 
                   placeholder="Repetir Password">
        </div>

        <input type="submit" value="Crear Cuenta" class="formulario__submit">

        <div class="acciones">
            <a href="/" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
        </div>
    </form>
</main>