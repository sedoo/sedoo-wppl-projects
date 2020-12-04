<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
global $taxo_names_offre_services;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

    <a href="<?php the_permalink(); ?>"></a>
    <div class="group-content">
        <div class="entry-content">
            <h3><?php the_title(); ?></h3>
            <h4><?php echo get_field('sedoo_project_nom_long', get_the_ID()); ?></h4>
            <?php if(get_field('date_de_debut', get_the_ID())) { ?>
                <span>Du <?php echo get_field('date_de_debut', get_the_ID()); ?> au <?php echo get_field('date_de_fin', get_the_ID()); ?></span>
            <?php } ?>
            <?php 
                $offre_service = get_the_terms( get_the_ID(), $taxo_names_offre_services );
                foreach($offre_service as $offre) {
                    echo '<p>#'.esc_html($offre->name).'</p>';   
                }
            ?>
			<?php 
			if($contenu_deplie == true) {
				the_content(); 
            } else {
				the_excerpt(); 
			}
			?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
            <?php
            if ( 'post' === get_post_type() ) :
                ?>
                <p><?php the_date('M / d / Y') ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><?php echo __('Read more', 'sedoo-wpth-labs'); ?> →</a>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-->