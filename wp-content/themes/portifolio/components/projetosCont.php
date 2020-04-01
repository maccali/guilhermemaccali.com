<div id="projetos" class="container-fluid pagina-vazia escuro">
    <div class="container padding-container2">
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h2 data-aos="fade-up">Meus Projetos</h2>
            </div>
        </div>
        <div id="macy-container">
            <?php 
            $newsArgs = array( 'post_type' => 'projeto', 'posts_per_page' => 2);                   
            $newsLoop = new WP_Query( $newsArgs );                  
            while ( $newsLoop->have_posts() ) : $newsLoop->the_post();              
            ?>
                <?php get_template_part('components/cardProjeto')?>
            <?php endwhile; ?>
        </div>
    </div>
</div> 


<!-- <div class="news">                                 -->
            <!-- <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1> -->
                <!-- <p><strong><?php the_time('F jS, Y') ?></strong> by <?php the_author_posts_link() ?></p> -->
                <!-- <p><?php the_content(); ?></p> -->
                <!-- <p>Retornando o campo personalizado: <?php echo get_post_meta($post->ID, 'valor_meta', true); ?></p> -->
    <!-- </div> -->