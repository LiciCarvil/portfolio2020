<?php get_header(); ?>

    <section class="panel introBlock smContainer" data-color="pinkLight">
        <div class="textBlock">
            <h1 class="hero">Hello</h1>
            <p class="paragraph-big">Welcome to my portfolio. My name is Alicia Cardete and I work as a designer. </p>
        </div>
        <span class="scrollMe"></span>
    </section>
    
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
                        
                        <div class="project-item">
                            <a href="<?php the_permalink(); ?>">
                                <img src= "<?php echo $thumbnail?>"> <!-- Para que mantenga la proporción indiferentemente del tamaño del dispositivo -->
                                <h2 class="secondaryTitle"><?php echo get_the_title()?></h2>
                                <figcaption><?php echo get_the_excerpt()?></figcaption>
                            </a>
                        </div>

                        <!-- style="background-image:url(<?php echo $thumbnail?>)" -->
                    <?php endwhile; wp_reset_postdata();?>
                    <!-- Tenemos que hacer un wp_reset_postdata() para asegurarnos que vuelve a coger los posts generales -->
                </div>
            </div>
            
            
        
    </section>

    <section class="panel contactBlock smContainer" data-color="pinkLight">
        <adress class="textBlock">
            <p class="primaryTitle">Say hello</p>
            <a href="mailto:name@email.com" class="paragraph-big">aliciacdt.job@gmail.com</a>
        </adress>
    </section>

<?php get_footer(); ?>