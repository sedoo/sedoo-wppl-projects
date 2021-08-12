<?php

global $cpt_names_project;
global $taxo_names_typologie;
global $taxo_names_highlights;
global $taxo_names_thematiques;
global $taxo_names_offre_services;
$titre = get_field('titre_du_bloc');
$highlights = get_field('highlights');
$thematiques = get_field('thematiques');
$typologies = get_field('typologies_de_projets');
$offre_de_services = get_field('offre_de_services');
$limite = get_field('limite');
$display = get_field('mode_daffichage');
$contenu_deplie = get_field('deplier_le_contenu');

////// CREATING THE TAX QUERY DEPENDING ON IF FIELDS ARE SET ON THE BLOCK
//////////
$tax_query = [];
if($typologies) {
    foreach($typologies as $typologie) {
        $tax_query[] = array('taxonomy' => $taxo_names_typologie, 'field' => 'ID', 'terms' => $typologie);
    }
}


if($highlights) {
    foreach($highlights as $highlight) {
        $tax_query[] = array('taxonomy' => $taxo_names_highlights, 'field' => 'ID', 'terms' => $highlight);
    }
}

if($offre_de_services) {
    foreach($offre_de_services as $offre) {
        $tax_query[] = array('taxonomy' => $taxo_names_offre_services, 'field' => 'ID', 'terms' => $offre);
    }
}

if($thematiques) {
    foreach($thematiques as $thematique) {
        $tax_query[] = array('taxonomy' => $taxo_names_thematiques, 'field' => 'ID', 'terms' => $thematique);
    }
}

/////// CREATING THE REQUEST
//////////////
$args = array(
    'post_type'             => $cpt_names_project,
    'post_status'           => array( 'publish' ),
    'posts_per_page'        => $limite
    );

if(!empty($tax_query)) {
    $args['tax_query'] = $tax_query; 
}
$get_project_list = new WP_Query( $args );


if ( $get_project_list->have_posts() ) {
    ?>
        <section role="listNews" class="sedoo-labtools-liste-projets">
            <h2><?php echo $titre; ?></h2>
            <div class="post-wrapper ">
                <?php 
                while ( $get_project_list->have_posts() ) {
                    $get_project_list->the_post();
                    $highlight = has_term( $term = 'Oui', $taxonomy = $taxo_names_highlights);
                    include 'display/content-'.$display.'.php';
                    wp_reset_postdata();
                }
                ?>
            </div>
        </section> 
    <?php 
}

?>


