<?php
/**
 * Plugin Name: Sedoo - Projects
 * Description: Créer un post type Projects Sedoo
 * Version: 0.0.7
 * Author: Nicolas Gruwe 
 * GitHub Plugin URI: sedoo/sedoo-wppl-projects
 * GitHub Branch:     master
 */



global $taxo_names_typologie;
global $taxo_names_highlights;
global $taxo_names_thematiques;
global $taxo_names_offre_services;
global $cpt_names_project;


$taxo_names_typologie = 'sedoo_wppl_projects_taxo_typo';
$taxo_names_highlights = 'sedoo_wppl_projects_taxo_high';
$taxo_names_thematiques = 'sedoo_wppl_projects_taxo_thema';
$taxo_names_offre_services = 'sedoo_wppl_projects_taxo_serv';
$cpt_names_project = 'sedoo_wppl_project';



function sedoo_wppl_project_add_css() {
    if(is_single()) {
        wp_register_style( 'sedoo_wppl_project_css', plugins_url('css/style.css', __FILE__) );
        wp_enqueue_style( 'sedoo_wppl_project_css' );    
    }
}
add_action( 'wp_head', 'sedoo_wppl_project_add_css' );



include 'sedoo-wppl-projects-acf-func.php';
include 'inc/sedoo-wppl-projects-acf-field.php';
