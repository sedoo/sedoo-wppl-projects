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

$nom_long = get_field('sedoo_project_nom_long');
$site_web = get_field('sedoo_project_site_du_projet');
$url_data_access = get_field('sedoo_project_url_data_access');
$url_project_mission = get_field('sedoo_project_url_project_mission');
$logo_url = get_field('sedoo_project_logo');
?>

<div id="primary" class="content-area project-content-page">
        <div class="wrapper-layout">    
            <main id="main" class="site-main">
                <article id="post-<?php the_ID();?>">	
                    <header>
						<div>
							<h1><?php the_title(); ?></h1>
							<span>  <?php echo $nom_long; ?></span>
							<div>
								<a title="Site web du projet" target="_blank" href=" <?php echo $site_web; ?>"> <?php echo $site_web; ?> </a>
							</div>
						</div>

						<?php if($logo_url) { ?>
							<figure>
								<img src="<?php echo $logo_url; ?>">
							</figure>
						<?php } ?>
	                </header>
                    <section>
                        <?php the_content(); ?>
                    </section>
                    <?php if (get_field("sources")){ ?>
                    <footer class="sources">
                        <h2><?php echo __('Sources', 'sedoo-wpth-labs'); ?> :</h2>
                        <p><?php the_field("sources") ?></p>
                    </footer>
                    <?php } ?>
                </article>
            </main><!-- #main -->
			
			<?php 
				$thematiques = get_the_terms( get_the_ID(), $taxo_names_thematiques );
				$liste_offres = get_the_terms( get_the_ID(), $taxo_names_offre_services);
				$liste_typologies = get_the_terms( get_the_ID(), $taxo_names_typologie );
			if(($thematiques == NULL) && ($liste_offres == NULL) && ($liste_typologies == NULL)) {}
			else {
			?>

				<aside class="contextual-sidebar">

					<?php 
						$start_date = get_field('date_de_debut');
						if($start_date) {
							echo '<h2> Dates du projet </h2>';
							$end_date = get_field('date_de_fin');
							echo '<div>';
							echo '<p> From '.$start_date.' to '.$end_date.'</p>';
							echo '</div>';
						}
					?>
					<?php 
						if($url_data_access || $url_project_mission) {
							echo '<h2> URL </h2>';
						}
						if($url_data_access) {
							echo '<a href="'.$url_data_access.'">Data Access</a>';
						}
						if($url_project_mission) {
							echo '<a href="'.$url_project_mission.'"> Official Website</a>';
						}
						if($thematiques) {
							echo '<h2> Thématiques </h2>';
							echo '<div class="tag">';
							foreach($thematiques as $thematique) {
								echo '<a href="'.get_term_link($thematique->term_id).'">'.esc_html($thematique->name).'</a>';   
							}
							echo '</div>';
						}
					?>
					<?php 
						if($liste_offres) {
							echo '<h2> Offres de services </h2>';
							echo '<div class="tag">';
							foreach($liste_offres as $offre) {
								echo '<a href="'.get_term_link($offre->term_id).'">'.esc_html($offre->name).'</a>';   
							}
							echo '</div>';
						}
					?>
					<?php 
						if($liste_typologies) {
							echo '<h2> Typologies </h2>';
							echo '<div class="tag">';
							foreach($liste_typologies as $typlogies) {
								echo '<a href="'.get_term_link($typlogies->term_id).'">'.esc_html($typlogies->name).'</a>';   
							}
							echo '</div>';
						}
					?>
					<?php 
						$linked_project = get_field('sedoo_projects_projets_en_relation');
						if($linked_project) {
							echo '<h2> Projets en relation </h2>';
							echo '<ul>';
							foreach($linked_project as $project) {
								echo '<li><a href="'.get_permalink($project->ID).'">'.$project->post_title.'</a></li>';
							}
							echo '</ul>';
						}
					?>
				</aside>
			<?php
			}
		?>
		</div>
	</div>
	