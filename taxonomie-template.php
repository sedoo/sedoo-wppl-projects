<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labs_by_Sedoo
 */

include 'inc/sedoo-wppl-projects-display-helpers.php';

get_header();
?>

<div id="content-area" class="wrapper project-taxonomie-template archives">
    <main id="main" class="site-main">
        <?php
        if (!empty($cover)) {
            $coverStyle = "background-image:url(" . $cover['url'] . ")";
        ?>

            <header id="cover" class="page-header" style="<?php echo $coverStyle; ?>">

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
        $mainprojects = get_posts($args);
        sedoo_project_display_list_of_projects($mainprojects, get_queried_object());
        /// END MAIN PROJECTS
        ///////

        $ongoing_args = array(
            'numberposts' => -1,
            'post_type'   => 'sedoo_wppl_project',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key' => 'sedoo_project_type_of_project',
                    'value' => 'secondaire',
                ),
                'date_de_fin' => array(
                    'key' => 'date_de_fin',
                    'value'   => null,
                    'compare' => 'IN'
                ),
                'date_de_debut' => array(
                    'key' => 'date_de_debut',
                    'compare' => 'EXISTS',
                ),
            ),
            'tax_query' => array(
                array(
                    'taxonomy' => get_queried_object()->taxonomy,
                    'field' => 'id',
                    'terms' => get_queried_object()->term_id // Where term_id of Term 1 is "1".
                )
            ),
            'meta_key' => 'date_de_debut',
            'orderby' => 'meta_value',
            'order' => 'DESC'
        );

        $finished_args =
            array(
                'post_type'   => 'sedoo_wppl_project',
                'numberposts' => -1,
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'sedoo_project_type_of_project',
                        'value' => 'secondaire',
                    ),
                    'date_de_fin' => array(
                        'key' => 'date_de_fin',
                        'value'   => null,
                        'compare' => 'NOT IN'
                    ),
                    'date_de_debut' => array(
                        'key' => 'date_de_debut',
                        'compare' => 'EXISTS',
                    ),
                ),
                'tax_query' => array(
                    array(
                        'taxonomy' => get_queried_object()->taxonomy,
                        'field' => 'id',
                        'terms' => get_queried_object()->term_id // Where term_id of Term 1 is "1".
                    )
                ),
                'meta_key' => 'date_de_fin',
                'orderby' => 'meta_value',
                'order' => 'DESC'
            );
        $finished_sideprojects = get_posts($finished_args);
        $ongoing_sideprojects = get_posts($ongoing_args);
        
        if ($ongoing_sideprojects || $finished_sideprojects) {
            ///////
            /// SHOW SIDE PROJECTS
            echo sedoo_project_secondary_table_header();
            echo sedoo_project_display_secondary_projects($ongoing_sideprojects);
            echo sedoo_project_display_secondary_projects($finished_sideprojects);

        ?>
            </tbody>
            </table>
        <?php } ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
