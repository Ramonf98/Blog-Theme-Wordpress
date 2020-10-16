            <aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-seccion">
                        <h3>Siguenos</h3>
                        <div class="redes-sociales">
                            <a class="twitter" href="#">
                                <i class="icono fab fa-twitter"></i>
                                <span class="seguidores">13k</span>
                            </a>
                            <a class="facebook" href="#">
                                <i class="icono fab fa-facebook"></i>
                                <span class="seguidores">4k</span>
                            </a>
                            <a class="instagram" href="#">
                                <i class="icono fab fa-instagram"></i>
                                <span class="seguidores">4.5k</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Suscribete</h3>
                        <form action="" class="formulario">
                            <label for="email">Suscribete a nuestro boletin</label>
                            <input type="email" id="email" placeholder="Correo Electronico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>

<!--                 <div class="widget ad">
                    <div class="contenedor-ad">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt=""></a>
                    </div>
                </div> -->

                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ): endif; ?>
            </aside>