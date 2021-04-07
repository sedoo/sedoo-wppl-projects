<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labs_by_Sedoo
 */

get_header();
?>

<?php 

// THIS FUNCTION IS USED TO DISPLAY PROJECTS IN TAXO PAGES
function sedoo_project_display_list_of_projects($projects, $term) { ?>
    <section class="post-wrapper sedoo_blocks_listearticle">
    <?php 
        foreach($projects as $projet) {
        ?>
        <article id="post-<?php echo $projet->ID; ?>" <?php post_class('post'); ?>>
            <a href="<?php echo get_the_permalink($projet->ID); ?>"></a>
            <header class="entry-header">
                <figure>
                    <?php 
                    if (has_post_thumbnail(get_the_ID())) {
                        get_the_post_thumbnail(get_the_ID(), 'thumbnail-loop');
                    } else {
                        labs_by_sedoo_catch_that_image();                
                    }
                    ?>          
                </figure>
            </header><!-- .entry-header -->
            <div class="group-content">
                <div class="entry-content">
                    <h3><?php echo get_the_title($projet->ID); ?></h3>
                    <p>
                    <?php 
                        echo get_the_excerpt($projet->ID); 								
                    ?></p>
                </div><!-- .entry-content -->
            </div>
        </article><!-- #post-->
        <?php 
        }
    ?>
    </section>
    <?php 
    }
    ?>

	<div id="content-area" class="wrapper archives">
		<main id="main" class="site-main">
		<?php
		if ( !empty($cover)) {
				$coverStyle = "background-image:url(".$cover['url'].")";
			?>
			
			<header id="cover" class="page-header" style="<?php echo $coverStyle;?>">
				
			</header><!-- .page-header -->
			<?php
			}
			?>	
			<h1 class="page-title">
                <?php echo get_queried_object()->name; ?>
			</h1>
            <?php 
            
            ///////
            /// START MAIN PROJECTS
            $args = array(
				'numberposts' => -1,
				'post_type'   => 'sedoo_wppl_project',
				'meta_key' => 'sedoo_project_type_of_project',
				'meta_value' => 'principal',
                'tax_query' => array(
                    array(
                      'taxonomy' => get_queried_object()->taxonomy,
                      'field' => 'id',
                      'terms' => get_queried_object()->term_id // Where term_id of Term 1 is "1".
                    )
                  )
			);
			$mainprojects = get_posts( $args );
            sedoo_project_display_list_of_projects($mainprojects, get_queried_object());
			?>

           
            <?php 
            $args = array(
				'numberposts' => -1,
				'post_type'   => 'sedoo_wppl_project',
				'meta_key' => 'sedoo_project_type_of_project',
				'meta_value' => 'secondaire',
                'tax_query' => array(
                    array(
                      'taxonomy' => get_queried_object()->taxonomy,
                      'field' => 'id',
                      'terms' => get_queried_object()->term_id // Where term_id of Term 1 is "1".
                    )
                  )
			);

            /// END MAIN PROJECTS
            ///////

            ///////
            /// SHOW SIDE PROJECTS
			$sideprojects = get_posts( $args );
            if($sideprojects) {
                ?>
                <h2> Others projects </h2>
                <table class="taxo_project_table">
                    <tbody>
                        <tr>
                            <th>Short name</th>
                            <th>Long name</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Main link</th>
                        </tr>
                        <?php 
                            foreach($sideprojects as $projet) {
                        ?>
                        <tr>
                            <td><?php echo '<a href="'.get_permalink($projet->ID).'">'.$projet->post_title.'</a>'; ?></td>
                            <td><?php if(get_field('sedoo_project_nom_long' , $projet->ID)) { echo get_field('sedoo_project_nom_long' , $projet->ID); } else { echo '-'; } ?></td>
                            <td><?php if(get_field('date_de_debut' , $projet->ID)) { echo get_field('date_de_debut' , $projet->ID); } else { echo '-'; } ?></td>
                            <td><?php if(get_field('date_de_fin' , $projet->ID)) { echo get_field('date_de_fin' , $projet->ID); } else { echo '-'; } ?></td>
                            <td class="text-center"><?php if(get_field('sedoo_project_url_project_mission' , $projet->ID)) { echo '<a href="'.get_field('sedoo_project_url_project_mission' , $projet->ID).'"><span class="dashicons dashicons-admin-links"></span></a>'; } else { echo '-'; } ?></td>
                        </tr>
                        <?php 
                        }
                        ?>
                        
                    </tbody>
                </table>
            <?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();