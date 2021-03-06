<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <section class="main col-md-8">
                <div class="row single-post">
                    <!-- Si tienes post entonces mientras haya articulos los vamos a ir cargando  -->
                    <?php if( have_posts() ) : while(have_posts()) : the_post(); ?>
                    <artice class="col-md-12 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo"><?php the_title(); ?></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>
                                <div class="texto">
                                    <?php echo the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </artice>

                    <?php endwhile; else: ?>
                    <artice class="col-md-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">El Post que buscas no existe</a></h2>
                                <div class="extracto">
                                    <p>Revisa que la URL que hayas ingresado sea correcta</p>
                                </div>
                            </div>
                        </div>
                    </artice>
                    <?php endif; ?>
                </div>


            </section>

            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>