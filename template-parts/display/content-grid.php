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
$postType=get_post_type();
?>
<style>
.Highlights-oui {
    transform: scale(1.02);
    box-shadow: 0 0px 3px rgb(0, 0, 0);
}
</style>

<article id="post-<?php get_the_ID(); ?>" <?php post_class('post highlight-'.$highlight); ?>>
    <a href="<?php the_permalink(); ?>"></a>
	<header class="entry-header">
        <figure>
            <?php 
            if (get_field('sedoo_project_logo', get_the_ID())) {
                ?>
                <figure>
                    <img src="<?php echo get_field('sedoo_project_logo', get_the_ID()); ?>" alt="">  
                </figure>
                <?php 
            } else {
                labs_by_sedoo_catch_that_image();                
            }?>           
        </figure>
	</header><!-- .entry-header -->
    <div class="group-content">
        <div class="entry-content">
            <h3><?php the_title(); ?></h3>
            <?php if(get_field('sedoo_project_nom_long', get_the_ID()) { ?>
                <h4><?php echo get_field('sedoo_project_nom_long', get_the_ID()); ?></h4>
            <?php } ?>
            <?php if(get_field('date_de_debut', get_the_ID())) { ?>
            <span>From <?php echo get_field('date_de_debut', get_the_ID()); ?> to <?php echo get_field('date_de_fin', get_the_ID()); ?></span>
            <?php } ?>
            <div class="tag <?php echo $taxo_names_thematiques; ?>">
                <?php 
                    $thematiques = get_the_terms( get_the_ID(), $taxo_names_thematiques );
                    foreach($thematiques as $thematique) {
                        echo '<a href="'.get_term_link($thematique->term_id).'">'.esc_html($thematique->name).'</a>';   
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