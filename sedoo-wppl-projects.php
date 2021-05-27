<?php
/**
 * Plugin Name: Sedoo - Projects
 * Description: Gestion des projets
 * Version: 1.0.19
 * Author: Nicolas Gruwe 
 * GitHub Plugin URI: sedoo/sedoo-wppl-projects
 * GitHub Branch:  master
 * Text Domain:  sedoo-wppl-projects 
 * Domain Path:  /languages
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
	global $taxo_names_typologie;
	global $taxo_names_offre_services;
	global $taxo_names_thematiques;
	global $cpt_names_project;
    if(is_single() && $cpt_names_project == get_post_type() || is_archive($cpt_names_project) || is_tax($taxo_names_thematiques) || is_tax($taxo_names_typologie) || is_tax($taxo_names_offre_services)) {
		echo '<link href="'.plugins_url('css/style.css', __FILE__).'" rel="stylesheet" type="text/css" />';
        wp_register_style( 'sedoo_wppl_project_css', plugins_url('css/style.css', __FILE__) );
        wp_enqueue_style( 'sedoo_wppl_project_css' );    
    }
}
add_action( 'wp_head', 'sedoo_wppl_project_add_css' );

function sedoo_project_bidirectionnal_projects_link( $value, $post_id, $field  ) {
	
	// vars
	$field_name = $field['name'];
	$field_key = $field['key'];
	$global_name = 'is_updating_' . $field_name;
	
	// bail early if this filter was triggered from the update_field() function called within the loop below
	// - this prevents an inifinte loop
	if( !empty($GLOBALS[ $global_name ]) ) return $value;
	
	// set global variable to avoid inifite loop
	// - could also remove_filter() then add_filter() again, but this is simpler
	$GLOBALS[ $global_name ] = 1;
	
	// loop over selected posts and add this $post_id
	if( is_array($value) ) {
		foreach( $value as $post_id2 ) {
			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);
			// allow for selected posts to not contain a value
			if( empty($value2) ) {
				$value2 = array();
			}
			// bail early if the current $post_id is already found in selected post's $value2
			if( in_array($post_id, $value2) ) continue;
			// append the current $post_id to the selected post's 'related_posts' value
			$value2[] = $post_id;
			// update the selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
		}
	
	}
	
	// find posts which have been removed
	$old_value = get_field($field_name, $post_id, false);
	if( is_array($old_value) ) {
		foreach( $old_value as $post_id2 ) {
			// bail early if this value has not been removed
			if( is_array($value) && in_array($post_id2, $value) ) continue;
			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);
			// bail early if no value
			if( empty($value2) ) continue;
			// find the position of $post_id within $value2 so we can remove it
			$pos = array_search($post_id, $value2);
			// remove
			unset( $value2[ $pos] );
			// update the un-selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
		}
	}

	// reset global varibale to allow this filter to function as per normal
	$GLOBALS[ $global_name ] = 0;
	// return
    return $value;
}

add_filter('acf/update_value/name=sedoo_projects_projets_en_relation', 'sedoo_project_bidirectionnal_projects_link', 10, 3);

include 'sedoo-wppl-projects-acf-func.php';
include 'inc/sedoo-wppl-projects-acf-field.php';



// LOAD LANGUAGES FILES
function sedoo_projects_load_language() {
    load_plugin_textdomain( 'sedoo-wppl-projects', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'sedoo_projects_load_language' );