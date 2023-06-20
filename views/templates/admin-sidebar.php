<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Inicio
            </span>    
        </a>

        <a href="/admin/productos" class="dashboard__enlace <?php echo pagina_actual('/productos') ? 'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-cart-shopping dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Productos
            </span>    
        </a>
    </nav>
</aside>