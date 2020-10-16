<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <section class="main col-md-8">
                <div class="row single-post">
                    <artice class="col-md-12 post">
                        <div class="contenedor">
                            <div class="info text-center">
                                <h1 class="my-4">Error 404</h1>
                                <h2 class="titulo">El Post que buscas no existe</a></h2>
                                <div class="extracto">
                                    <p>Revisa que la URL que hayas ingresado sea correcta</p>
                                    <p>Regresar a la página de <a href="<?php bloginfo('url'); ?>">inicio</a></p>
                                </div>
                            </div>
                        </div>
                    </artice>
                </div>


            </section>

            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>