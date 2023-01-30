<?php
/**
 * Template part for displaying posts - simple list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
global $taxo_names_offre_services;
$contenuentier = get_field('deplier_le_contenu');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('listpages_list'); ?>>
<?php //the_permalink(); ?>
	<header class="entry-header">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h4><?php echo get_field('sedoo_project_nom_long', get_the_ID()); ?></h4>
	</header><!-- .entry-header -->
    <div class="group-content">
        <div class="entry-content">
            <?php 
                $offre_service = get_the_terms( get_the_ID(), $taxo_names_offre_services );
                foreach($offre_service as $offre) {
                    echo '<p>#'.esc_html($offre->name).'</p>';   
                }
            ?>
			<p>
			<?php 
			if($contenuentier == true) {
				the_content(); 
            } else {
				the_excerpt(); 
			}
			?></p>
            <p class="date"><?php the_date('M / d / Y') ?>
            <a href="<?php the_permalink(); ?>"><?php echo __('Read more', 'sedoo-wpth-labs'); ?> →</a>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-->