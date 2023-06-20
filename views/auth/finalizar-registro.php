<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">
        Bienvenido! Esta ventana esta en construccion, para acceder al dashboard necesita ser admin. Consulte con su tecnico para poder obtener acceso.
    </p>
    <?php if(isset($alertas['exito']))  {?>
        <div class="acciones--centrar">
            <a href="/" class="acciones__enlace">Cerrar Sesion</a>
        </div>
    <?php } ?>
</main>