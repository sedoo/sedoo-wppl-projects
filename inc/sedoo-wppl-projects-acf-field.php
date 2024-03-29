<?php 


// fields on project post type
if( function_exists('acf_add_local_field_group') ):

    global $cpt_names_project;
    acf_add_local_field_group(array(
        'key' => 'group_5fc775ecf241d',
        'title' => 'sedoo projects',
        'fields' => array(
            array(
                'key' => 'field_5fc775f11a0bc',
                'label' => 'Nom long',
                'name' => 'sedoo_project_nom_long',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5fc7760a1a0bd',
                'label' => 'Site du projet',
                'name' => 'sedoo_project_site_du_projet',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5fc7760a1a1bd',
                'label' => 'URL access data',
                'name' => 'sedoo_project_url_data_access',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5fc7760a1a1be',
                'label' => 'URL DMP',
                'name' => 'sedoo_project_url_dmp',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5fc7760a1a2bd',
                'label' => 'URL official project / mission',
                'name' => 'sedoo_project_url_project_mission',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_60642ffd0a9da',
                'label' => 'type de projet',
                'name' => 'sedoo_project_type_of_project',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'principal' => 'Principal',
                    'secondaire' => 'Secondaire',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => array(
                    0 => 'principal',
                ),
                'layout' => 'vertical',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5fca2c4ce0363',
                'label' => 'Logo',
                'name' => 'sedoo_project_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5fc7766f1a0c0',
                'label' => 'Date de début',
                'name' => 'date_de_debut',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'd/m/Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_5fc776941a0c1',
                'label' => 'Date de fin',
                'name' => 'date_de_fin',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'd/m/Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_60643fc40197b',
                'label' => 'Projets en relation',
                'name' => 'sedoo_projects_projets_en_relation',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'sedoo_wppl_project',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                    1 => 'post_type',
                    2 => 'taxonomy',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => $cpt_names_project,
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
endif;



////////
// fields on project list block
//////
if( function_exists('acf_add_local_field_group') ):

    global $taxo_names_typologie;
    global $taxo_names_thematiques;
    global $taxo_names_offre_services;
    global $taxo_names_highlights;
    
    acf_add_local_field_group(array(
        'key' => 'group_5fc89efce0aa6',
        'title' => 'Affichage de projets',
        'fields' => array(
            array(
                'key' => 'field_5fc89f07dbc94',
                'label' => 'Titre du bloc',
                'name' => 'titre_du_bloc',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5fc89f0fdbc96',
                'label' => 'Thematiques',
                'name' => 'thematiques',
                'type' => 'taxonomy',
                'instructions' => 'Si aucune selectionnée, tous seront affichées',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => $taxo_names_thematiques,
                'field_type' => 'checkbox',
                'allow_null' => 1,
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ),
            array(
                'key' => 'field_5fc89f0fdbc95',
                'label' => 'Highlights',
                'name' => 'highlights',
                'type' => 'taxonomy',
                'instructions' => 'Si aucune selectionnée, tous seront affichées',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => $taxo_names_highlights,
                'field_type' => 'radio',
                'allow_null' => 1,
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ),
            array(
                'key' => 'field_5fc89f2bdbc96',
                'label' => 'Typologies de projets',
                'name' => 'typologies_de_projets',
                'type' => 'taxonomy',
                'instructions' => 'Si aucune selectionnée, tous seront affichées',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => $taxo_names_typologie,
                'field_type' => 'checkbox',
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_5fc89f49dbc97',
                'label' => 'Offre de services',
                'name' => 'offre_de_services',
                'type' => 'taxonomy',
                'instructions' => 'Si aucune selectionnée, tous seront affichées',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => $taxo_names_offre_services,
                'field_type' => 'checkbox',
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_5fc8bfa973681',
                'label' => 'Tout le contenu',
                'name' => 'deplier_le_contenu',
                'type' => 'true_false',
                'instructions' => 'Le contenu des projets seront intégralement affichés sur le listing',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5fc89f59dbc98',
                'label' => 'Limite',
                'name' => 'limite',
                'type' => 'number',
                'instructions' => '-1 pour illimité',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '-1',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '-1',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5fc8a4d18d54e',
                'label' => 'Mode d\'affichage',
                'name' => 'mode_daffichage',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'grid' => 'En Grille',
                    'grid-noimage' => 'En grille sans image',
                    'list' => 'En liste',
                ),
                'default_value' => array(
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/sedoo-blocks-projets',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'top',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

//
//// Fields on the projects setting page
///

acf_add_local_field_group(array(
	'key' => 'group_6091035347308',
	'title' => 'fields projets settings',
	'fields' => array(
		array(
			'key' => 'field_6091035aac9c2',
			'label' => 'Label \'others projects\'',
			'name' => 'label_others_projects',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Others projects',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));


//
//// Field for taxonomies under projects : secondary projects title
///  Overrides the label_others_projects of the global project settings page
acf_add_local_field_group(array(
	'key' => 'group_63e258bf4aae3',
	'title' => 'Label other projects',
	'fields' => array(
		array(
			'key' => 'field_63e2591e4ef4a',
			'label' => 'Label other projects',
			'name' => 'sedoo_project_label_other_projects_override',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Others projects',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'sedoo_wppl_projects_taxo_high',
			),
		),
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'sedoo_wppl_projects_taxo_thema',
			),
		),
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'sedoo_wppl_projects_taxo_typo',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
?>