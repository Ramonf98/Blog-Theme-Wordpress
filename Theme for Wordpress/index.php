<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <section class="main col-md-8">
                <div class="row titulo-seccion">
                    <div class="col-md-12">
                        <h3>Lo mas reciente</h3>
                    </div>
                </div>

                <div class="row posts">
                    <!-- Si tienes post entonces mientras haya articulos los vamos a ir cargando  -->
                    <?php if( have_posts() ) : while(have_posts()) : the_post(); ?>
                    <artice class="col-md-6 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>">
                                <!-- Si el articulo tiene un thumnail, entonces te vas a traer la imagen con la medida del homepage-thumb -->
                                <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'homepage-thumb' ); } ?>
                                </a>
                            </div>
                            <div class="info">
                                <h2 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>
                                <div class="extracto">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                                <div class="categorias">
                                    <?php the_category(); ?>
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

                <section class="row paginacion">
                    <div class="col-12">
                        <div class="pagination"><?php wp_pagenavi(); ?></div>
                    </div>
                </section>
            </section>

            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>