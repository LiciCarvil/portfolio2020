<?php get_header(); ?>
    <main>
        <div data-scroll >

            <section class="panel introBlock smContainer" data-color="pinkLight">
                <div class="textBlock">
                    <h1 class="hero">Hello</h1>
                    <p class="paragraph-big">Welcome to my portfolio. My name is Alicia Cardete and I work as a designer. </p>
                </div>
                <span class="scrollMe"></span>
            </section>
    
            <div class="content">
            <section class="panel projectsBlock bgContainer" data-color="pinkMedium">
                <div class="projectsBlock--container">
                    <h3 class="tertiaryTitle">Selected Works</h3>
                    <div class="projects">
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
                            <?php $thumbnail = get_the_post_thumbnail_url()?>
                                
                            <div class="content__item project-item">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="content__item-number">01</span>
                                    <div class="content__item-imgwrap">
                                        <div class="content__item-img" style="background-image:url(<?= $thumbnail ?>)"></div>
                                    </div>
                                    <div class="content__item-deco"></div>
                                    <h2 class="content__item-title secondaryTitle"><?php echo get_the_title()?></h2>
                                    <figcaption class="content__item-description"><?php echo get_the_excerpt()?></figcaption>
                                </a> 
                            </div>
                            <!-- Tenemos que hacer un wp_reset_postdata() para asegurarnos que vuelve a coger los posts generales -->
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                    
                    
                
            </section>
            </div>
            

            <section class="panel contactBlock smContainer" data-color="pinkLight">
                <adress class="textBlock">
                    <p class="primaryTitle">Say hello</p>
                    <a href="mailto:name@email.com" class="paragraph-big">aliciacdt.job@gmail.com</a>
                </adress>
            </section>

        </div>
    </main> 
<?php get_footer(); ?>