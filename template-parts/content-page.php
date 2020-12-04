<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labs_by_Sedoo
 */

global $taxo_names_typologie;
global $taxo_names_thematiques;
global $taxo_names_offre_services;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div>
			<div class="tag">
				<?php 
					if (has_term('',$taxo_names_thematiques)) {
				?>
					<sp> Thématiques </sp>
					<?php 
						$thematiques = get_the_terms( get_the_ID(), $taxo_names_thematiques );
						foreach($thematiques as $thematique) {
							echo '<span>'.esc_html($thematique->name).'</span>';   
						}
					?>
				<br />
				<?php 
					}
					if (has_term('', $taxo_names_offre_services)) {
				?>
					<sp> Services </sp>
					<?php 
						$liste_offres = get_the_terms( get_the_ID(), $taxo_names_offre_services);
						foreach($liste_offres as $offre) {
							echo '<span>'.esc_html($offre->name).'</span>';   
						}
					?>
				<br />
				<?php
					} 
					if (has_term('', $taxo_names_typologie)) {
				?>
					<sp> Typologies </sp>
					<?php 
						$liste_typologies = get_the_terms( get_the_ID(), $taxo_names_typologie );
						foreach($liste_typologies as $typlogies) {
							echo '<span>'.esc_html($typlogies->name).'</span>';   
						}
					}

					$date_debut = get_field('date_de_debut');
					$date_fin = get_field('date_de_fin');
					if($date_debut) {
						echo '<p> Du '.$date_debut.' au '.$date_fin.'</p>';
					}
				?>
			</div>
			<?php 
				$site_web = get_field('sedoo_project_site_du_projet');
				if($site_web) {
					echo '<a href="'.$site_web.'" target="_blank" title="Site du projet"> Site web</a>';
				}
			?>
		</div>
	</header><!-- .entry-header -->
    
	<div class="entry-content">
        
        
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'labs-by-sedoo' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
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
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
