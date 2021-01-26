<?php 

//////////////////////
// register thematique tax
function sedoo_project_register_thematiques_tax() {

	global $taxo_names_thematiques;
	global $cpt_names_project;

	$labels = array(
		'name'                       => _x( 'Thematiques', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Thematiques', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Thematiques', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_in_rest'				 => true,
		'show_ui'                    => true,        
		'rewrite'           => array( 'slug' => 'thematics' ),
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( $taxo_names_thematiques, array( $cpt_names_project ), $args );

}
add_action( 'init', 'sedoo_project_register_thematiques_tax', 0 );

//////////////////////
// register highlights tax
function sedoo_project_register_highlights_tax() {
	global $taxo_names_highlights;
	global $cpt_names_project;

	$labels = array(
		'name'                       => _x( 'Highlights', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Highlights', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Highlights', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_in_rest'				 => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( $taxo_names_highlights, array( $cpt_names_project ), $args );

}
add_action( 'init', 'sedoo_project_register_highlights_tax', 0 );

//////////////////////
// register typology taxo
function sedoo_project_register_typology_tax() {
	global $taxo_names_typologie;
	global $cpt_names_project;

	$labels = array(
		'name'                       => _x( 'Typologie de projet', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Typologie', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Typologies', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_rest'				 => true,
		'show_in_nav_menus'          => true,
		'rewrite'           => array( 'slug' => 'typologies' ),
		'show_tagcloud'              => true,
	);
	register_taxonomy( $taxo_names_typologie, array( $cpt_names_project ), $args );

}
add_action( 'init', 'sedoo_project_register_typology_tax', 0 );

//////////////////////
// register offre de services taxo
function sedoo_project_register_services_offer() {
	global $taxo_names_offre_services;
	global $cpt_names_project;

	$labels = array(
		'name'                       => _x( 'Offres de services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Offre de services', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Offre de services', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_rest'				 => true,
		'rewrite'           => array( 'slug' => 'services' ),
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( $taxo_names_offre_services, array( $cpt_names_project ), $args );

}
add_action( 'init', 'sedoo_project_register_services_offer', 0 );

//////////////////////
// Register project post type
function sedoo_projects_register_projets_post_type() {

	global $cpt_names_project;
	$labels = array(
		'name'                  => _x( 'Projets', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projet', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projets', 'text_domain' ),
		'name_admin_bar'        => __( 'Projets', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projets', 'text_domain' ),
		'description'           => __( 'Projets Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'rewrite'            	=> array( 'slug' => 'projects' ),
		'show_in_rest'			=> true,
        'rest_base'             => 'projets',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true
	);
	register_post_type( $cpt_names_project, $args );

}
add_action( 'init', 'sedoo_projects_register_projets_post_type', 0 );


//////////////////////
// register the block
function sedoo_projects_register_projets_block($block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	$templateURL = plugin_dir_path(__FILE__) . "template-parts/sedoo-project.php";
    // include a template part from within the "template-parts/block" folder
	if( file_exists( $templateURL)) {
		include $templateURL;
    }
}


function sedoo_projets_launch_block_creation() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'sedoo_blocks_projets',
        'title'             => __('Sedoo projets'),
        'description'       => __('Ajoute un block liste de projets'),
        'render_callback'   => 'sedoo_projects_register_projets_block',
        'enqueue_style'     => plugin_dir_url( __FILE__ ) . 'css/style.css',
        'category'          => 'sedoo-block-category',
        'icon'              => 'media-text',
        'keywords'          => array( 'projets', 'sedoo' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'sedoo_projets_launch_block_creation');
}


//////////////////////
// alter the single project page
add_filter ( 'single_template', 'sedoo_projet_single_template' );
function sedoo_projet_single_template($single_template) {
	global $cpt_names_project;
    global $post;
    
    if ($post->post_type == $cpt_names_project) {
        $single_template = plugin_dir_path( __FILE__ ) . 'single-projets.php';
    }
    return $single_template;
}



//////////////////////
// alter the taxonomy pages
add_filter ( 'archive_template', 'sedoo_wppl_project_load_taxo_template' );
function sedoo_wppl_project_load_taxo_template($taxo_template) {
        $taxo_template = plugin_dir_path( __FILE__ ) . 'taxonomie-template.php';
    return $taxo_template;
}



?>