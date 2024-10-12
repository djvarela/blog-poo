
<?php



?>
<header>
    <?php include_once("./src/views/layouts/header.php") ?>

</header>
<div class="contenedor">

    <main>

        <article>
            <div class="img-conteiner-article">
                <figure>
                    <img src="/src<?php echo $clase['data']['IMG_PORTADA'] ?>" alt="">
                    <figcaption>by <a href="https://www.deviantart.com/bardongo/art/Consejo-de-la-roca-357729206" target="_blank"> Bardongo </a>
                    </figcaption>
                </figure>

            </div>

            <div class="user-date">
                <ul>
                    <li> <img src="/src/img/icons/avatar.svg" alt="Avatar autor">
                        <a href="../perfil/" target="_blank"></a>
                    </li>
                    <li></li>
                    <li><a href="#" target="_blank">CATEGORIA: <?php echo $clase['data']['CATEGORIA'] ?></a></li>

                </ul>
            </div>
            <div class="article-content">
                <h1><?php echo $clase['data']['TITULO_POST'] ?></h1>

            </div>
            <footer>
                <ul>
                    <li>
                        <button id='like-post' data-like='<?php echo isset($clase['data']['like_post']) ? 'true': 'false' ?>' data-post=''>
                            <img src="/src/img/icons/like-<?php echo isset($clase['data']['like_post']) ?  'enabled' : 'disabled' ?>.svg" alt="button like">
                        </button>
                        <smal></smal>
                    </li>
                    <?php //if (isset($_SESSION['id_user'])) { ?>
                        <li><button id='btn-saved-post' data-saved='<?php echo isset($clase['data']['saved']) ? 'true' : 'false';?>' data-post='<?php echo  $clase['data']['ID_POST'] ?>' title='Guardar publicacion'>

                                <img src="/src/img/icons/star-<?php echo isset($clase['data']['saved']) == 'true' ? 'enabled' : 'disabled' ?>.svg" alt='Boton de guardar publicacion'>

                            </button>
                        </li>
                    <?php //} ?>
                </ul>
            </footer>
        </article>

        <section class="comments">
            <h2>Comentarios ():</h2>
            <!-- <?php // {  ?>
                <div class="forms-comments">
                    <form action="../assets/php/controllers/postComments.php" id='forms' method="post" autocomplete="off">

                        <input type='hidden' name='id-post' data-post='<?php //echo $id_post ?>' value='<?php //echo $id_post ?>' />
                        <input type='hidden' name='post' value='<?php //echo $link ?>' />

                        <textarea name="c-comentarios" class="editor" id="editor" cols="30" rows="10" placeholder="Dejar comentario"></textarea>

                        <button id='btn-public' type="submit">Publicar</button>
                    </form>
                </div>
            <?php //} ?> -->
            <div class="comments-continer">
                <ul></ul>
            </div>
        </section>

    </main>
    <aside>
        <div class="aside-cards">
            <h2>ULTIMAS PUBLICACIONES</h2>
            <div class="latesPosts">

                <ul>


                </ul>
            </div>
        </div>
        <div class="aside-cards">
            <h2>PUBLICACIONES RELACIONADAS</h2>
            <div class="latesPosts">
                <ul>
                </ul>
            </div>
        </div>
        <div class="aside-cards">
            <h2>CATEGORIAS</h2>
            <div class="linksCategory">

                <a href="">Categgorias</a>
            </div>
        </div>
    </aside>
</div>


<footer>
    2023
</footer>

<!-- <script defer src='../assets/js/comments.js'></script>
    <script defer src='../assets/js/liked.js'></script>
    <script defer src='../assets/js/savePost.js'></script> -->


<!-- //TOOD: agregar boton de me gusta a la publicaciones -->
