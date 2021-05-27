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
$contenuentier = get_field('deplier_le_contenu');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

    <a href="<?php the_permalink(); ?>"></a>
    <div class="group-content">
        <div class="entry-content">
            <h3><?php the_title(); ?></h3>
            <h4><?php echo get_field('sedoo_project_nom_long', get_the_ID()); ?></h4>
            <div class="tag <?php echo $taxo_names_thematiques; ?>">
                <?php 
                    $thematiques = get_the_terms( get_the_ID(), $taxo_names_thematiques );
                    foreach($thematiques as $thematique) {
                        echo '<a href="'.get_term_link($thematique->term_id).'" class="'.$thematique->slug.'">'.esc_html($thematique->name).'</a>';   
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
            <p>
			<?php 
			if($contenuentier == true) {
				the_content(); 
            } else {
				the_excerpt(); 
			}
			?>
            </p>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>"><?php echo __('Read more', 'sedoo-wpth-labs'); ?> →</a>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-->