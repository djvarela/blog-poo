<div class="logo-conteiner">
    <img src="/src/img/fogata.png" alt="Logo La Roca del Consejo - Fogata">
</div>
<div class="title">
    <h2>La Roca del Consejo</h2>
</div>
<nav>
    <ul>
        <li><a href="Inicio">Inicio</a></li>
        <li><a href="publicaicones">Publicaciones</a></li>
        <li><a href="contacto">Contacto</a></li>
        <?php if (isset($_SESSION)) {
            echo "<li><a href='../login'>Ingesar</a></li>";
        } else {
            echo "<li><a href='../admin/dashboard'>Admin</a></li>";
        } ?>

    </ul>
</nav>