<?php get_header(); ?>
        <div data-scroll >

            <section class="introBlock smContainer panel" data-color="pinkLight">
                <div class="textBlock">
                    <h1 class="hero">Hola</h1>
                    <p class="paragraph-big">Welcome to my portfolio. My name is Alicia Cardete and I work as a designer</p>
                </div>
                <span class="scrollMe"></span>
            </section>
    
            <section class="projectsBlock bgContainer panel" data-color="pinkMedium">
                <h3 class="tertiaryTitle">Selected Works</h3>
                
                
                <div class="projectsContainer">
                    <!-- Creamos la array y definimos los argumentos personalizados -->
                    <!-- Siempre hay que definir el tipo y el número de post que queremos por página -->
                    <!-- Después de la array, creamos una nueva variable con la nueva WP_Query, que será a la que llamaremos  -->
                    <?php 
                    $args  = array( 
                        'post_type' => 'cpt_projects', // Name 
                        'post_per_page' => -1
                    );
                    $proyectos = new WP_Query($args);
                    while ( $proyectos->have_posts() ) : $proyectos->the_post(); ?>
                    
                    <?php $postClass = $proyectos->current_post % 2 == 0 ? "projectEven" : "projectOdd"; ?>
                    <?php $thumbnail = get_the_post_thumbnail_url()?>


                    <div id="parallaxText"  class="project <?= $postClass ?>">
                        <div class="layer1 imageWrap"><img class="innerImage" src= "<?= $thumbnail ?>" data-scroll-zoom></div>
                        <h2 class="layer3 secondaryTitle">
                            <?php echo get_the_title()?>
                        </h2>
                    </div>
                           
                                
                            <!--div id="parallaxProject" class="project" style="background-color:aquamarine;
                                <a href="<?php the_permalink(); ?>">
                                    <span>01</span>
                                    <div class="layer1 imageWrap"><img class="innerImage" src= "<?= $thumbnail ?>" data-scroll-zoom></div>
                                    <h2><?php echo get_the_title()?></h2>
                                    <figcaption><?php echo get_the_excerpt()?></figcaption>>
                                </a> 
                            </div-->
                            <!-- Tenemos que hacer un wp_reset_postdata() para asegurarnos que vuelve a coger los posts generales -->
                            <?php endwhile; wp_reset_postdata();?>
                        </div>

            </section>
            
            <section class="contactBlock smContainer panel" data-color="pinkLight">
                <adress class="textBlock">
                    <p class="primaryTitle">Say hello</p>
                    <a href="mailto:name@email.com" class="paragraph-big">aliciacdt.job@gmail.com</a>
                </adress>
            </section>
        </div>


<?php get_footer(); ?>