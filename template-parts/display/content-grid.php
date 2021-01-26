<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
global $taxo_names_thematiques;
global $taxo_names_typologie;
global $taxo_names_offre_services;
$postType=get_post_type();
?>
<style>
.Highlights-oui {
    transform: scale(1.02);
    box-shadow: 0 0px 3px rgb(0, 0, 0);
}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class('post highlight-'.$highlight); ?>>
    <a href="<?php the_permalink(); ?>"></a>
	<header class="entry-header">
        <?php 
        // if (isset($postThumbnail)){ echo $postThumbnail; }
        ?>
        <figure>
            <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail-loop');
            } else {
                labs_by_sedoo_catch_that_image();                
            }?>            
        </figure>
	</header><!-- .entry-header -->
    <div class="group-content">
        <div class="entry-content">
            <h3><?php the_title(); ?></h3>
            <h4><?php echo get_field('sedoo_project_nom_long', get_the_ID()); ?></h4>
            <?php if(get_field('date_de_debut', get_the_ID())) { ?>
                <span>Du <?php echo get_field('date_de_debut', get_the_ID()); ?> au <?php echo get_field('date_de_fin', get_the_ID()); ?></span>
            <?php } ?>
            <div class="tag <?php echo $taxo_names_thematiques; ?>">
                <?php 
                    $thematiques = get_the_terms( get_the_ID(), $taxo_names_thematiques );
                    foreach($thematiques as $thematique) {
                        echo '<a href="'.get_term_link($thematique->term_id).'">'.esc_html($thematique->name).'</a>';   
                    }
                ?>
            </div>
            <div class="tag <?php echo $taxo_names_typologie; ?>">
                <?php 
                    $typologies = get_the_terms( get_the_ID(), $taxo_names_typologie );
                    foreach($typologies as $typologie) {
                        echo '<a href="'.get_term_link($typologie->term_id).'" class="'.$typologie->slug.'">'.esc_html($typologie->name).'</a>';   
                    }
                ?>
            </div>
            <div class="tag <?php echo $taxo_names_offre_services; ?>">
                <?php 
                    $offre_services = get_the_terms( get_the_ID(), $taxo_names_offre_services );
                    foreach($offre_services as $offre_service) {
                        echo '<a href="'.get_term_link($offre_service->term_id).'" class="'.$offre_service->slug.'">'.esc_html($offre_service->name).'</a>';   
                    }
                ?>
            </div>
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
            <?php endif; 
            if ( 'tribe_events' === get_post_type() ) :
                ?>
                <p><?php echo tribe_get_start_date(get_the_ID(), false, 'd M Y - g:i'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><?php echo __('Read more', 'sedoo-wpth-labs'); ?> →</a>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-->