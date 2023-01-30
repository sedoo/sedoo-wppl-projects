<?php

// THIS FUNCTION IS USED TO DISPLAY PROJECTS IN TAXO PAGES
function sedoo_project_display_list_of_projects($projects, $term)
{ ?>
    <section class="post-wrapper sedoo_blocks_listearticle">
        <?php
        foreach ($projects as $projet) {
        ?>
            <article id="post-<?php echo $projet->ID; ?>" <?php post_class('post'); ?>>
                <a href="<?php echo get_the_permalink($projet->ID); ?>"></a>
                <header class="entry-header">
                    <figure>
                        <?php
                        if (has_post_thumbnail($projet->ID)) {
                            echo get_the_post_thumbnail($projet->ID);
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

function sedoo_project_display_secondary_projects($projects)
{
    $res = "";
    foreach ($projects as $project) {
        $res .= "<tr><td>";
        $res .= '<a class="tab_project_tooltip" href="' . get_permalink($project->ID) . '">' . $project->post_title . '</a>';
        if (get_field('sedoo_project_nom_long', $project->ID)) {
            $res .= "<span>";
            $res .= get_field('sedoo_project_nom_long', $project->ID);
            $res .= "</span>";
        }
        $res .= "</td><td>";
        if (get_the_excerpt($project->ID)) {
            $res .= get_the_excerpt($project->ID);
        } else {
            if (get_field('sedoo_project_nom_long', $project->ID)) {
                $res .= get_field('sedoo_project_nom_long', $project->ID);
            } else {
                $res .= '-';
            }
        }
        $res .= "</td><td>";
        if (get_field('date_de_debut', $project->ID)) {
            $res .= get_field('date_de_debut', $project->ID);
        } else {
            $res .= '-';
        }
        $res .= "</td><td>";
        if (get_field('date_de_fin', $project->ID)) {
            $res .= get_field('date_de_fin', $project->ID);
        } else {
            $res .= '-';
        }
        $res .= '</td><td class="text-center">';
        if (get_field('sedoo_project_url_data_access', $project->ID)) {
            $res .= '<a href="' . get_field('sedoo_project_url_data_access', $project->ID) . '"><span class="dashicons dashicons-admin-links"></span></a>';
        } else {
            $res .= '-';
        }
        $res .= "</td></tr>";
    }
    return $res;
}

function secondary_table_header()
{
    $res = "";
    $res .= "<h2>";
    $res .= get_field('label_others_projects', 'options');
    $res .= '</h2><table class="taxo_project_table"><tbody><tr><th>';
    $res .= __('Name', 'sedoo-wppl-projects');
    $res .= "</th><th>";
    $res .= __('Description', 'sedoo-wppl-projects');
    $res .= "</th><th>";
    $res .= __('Start date', 'sedoo-wppl-projects');
    $res .= "</th><th>";
    $res .= __('End date', 'sedoo-wppl-projects');
    $res .= "</th><th>";
    $res .= __('Data access', 'sedoo-wppl-projects');
    $res .= "</th></tr>";
    return $res;
}
