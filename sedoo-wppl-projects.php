<?php
/**
 * Plugin Name: Sedoo - Projects
 * Description: Créer un post type Projects Sedoo
 * Version: 0.0.2
 * Author: Nicolas Gruwe 
 * GitHub Plugin URI: sedoo/sedoo-wppl-projects
 * GitHub Branch:     master
 */
global $taxo_names_typologie;
$taxo_names_typologie = 'sedoo_wppl_projects_taxo_typo';
global $taxo_names_highlights;
$taxo_names_highlights = 'sedoo_wppl_projects_taxo_high';
global $taxo_names_thematiques;
$taxo_names_thematiques = 'sedoo_wppl_projects_taxo_thema';
global $taxo_names_offre_services;
$taxo_names_offre_services = 'sedoo_wppl_projects_taxo_serv';
global $cpt_names_project;
$cpt_names_project = 'sedoo_wppl_project';
include 'sedoo-wppl-projects-acf-func.php';
include 'inc/sedoo-wppl-projects-acf-field.php';
