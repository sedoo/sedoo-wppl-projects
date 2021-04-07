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
		<?php if(get_field('date_de_debut', get_the_ID())) { ?>
			<span>From <?php echo get_field('date_de_debut', get_the_ID()); ?> to <?php echo get_field('date_de_fin', get_the_ID()); ?></span>
		<?php } ?>
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
        <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'labs-by-sedoo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
    </div>
</article><!-- #post-->