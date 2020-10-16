
    <footer>
        <div class="ad container">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="">
                </div>
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php wp_nav_menu(array(
                            'container'     =>  false,
                            'menu_class'    =>  '',
                            'item_wrap'     =>  '<ul class="col-md-12">%3$s</ul>',
                            'theme_location' => 'menu-footer'
                        )); ?>
                    </div>
                </div>
            </div>
        </nav>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Sitio creado por Ing. Ramón Cordova</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    
</body>
</html>