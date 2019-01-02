<?php
//add_action('init', 'init_post_types');
//function init_post_types()
//{
//    $labels = array(
//        'name' => _x('Teams', 'post type general name', THEME_OPT),
//        'singular_name' => _x('Team', 'post type singular name', THEME_OPT),
//        'menu_name' => _x('Teams', 'admin menu', THEME_OPT),
//        'name_admin_bar' => _x('Team', 'add new on admin bar', THEME_OPT),
//        'add_new' => _x('Add new', 'team', THEME_OPT),
//        'add_new_item' => __('Add new Team', '', THEME_OPT),
//        'new_item' => __('New Team', '', THEME_OPT),
//        'edit_item' => __('Edit Team', '', THEME_OPT),
//        'view_item' => __('View Team', '', THEME_OPT),
//        'all_items' => __('All Teams', '', THEME_OPT),
//        'search_items' => __('Search Team', '', THEME_OPT),
//        'not_found' => __('Teams not found', '', THEME_OPT),
//        'not_found_in_trash' => __('Teams in trash not found', '', THEME_OPT)
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'query_var' => true,
//        'capability_type' => 'post',
//        'has_archive' => false,
//        'hierarchical' => false,
//        'menu_position' => null,
//        'supports' => array('title', 'thumbnail')
//    );
//
//    register_post_type('Teams', $args);
//}
function revcon_change_post_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = _x('Teams', '', THEME_OPT);
    $submenu['edit.php'][5][0] = _x('Teams', '', THEME_OPT);
    $submenu['edit.php'][10][0] = _x('Add Team', '', THEME_OPT);
    $submenu['edit.php'][16][0] = _x('Tags Team', '', THEME_OPT);
}
function revcon_change_post_object()
{
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = _x('Teams', '', THEME_OPT);
    $labels->singular_name = _x('Team', '', THEME_OPT);
    $labels->add_new = _x('Add new', '', THEME_OPT);
    $labels->add_new_item = _x('Add new Team', '', THEME_OPT);
    $labels->edit_item = _x('Edit new Item', '', THEME_OPT);
    $labels->new_item = _x('Team', '', THEME_OPT);
    $labels->view_item = _x('View Team', '', THEME_OPT);
    $labels->search_items = _x('Search Team', '', THEME_OPT);
    $labels->not_found = _x('Teams not found', '', THEME_OPT);
    $labels->not_found_in_trash = _x('Teams in trash not found', '', THEME_OPT);
    $labels->all_items = _x('All Teams', '', THEME_OPT);
    $labels->menu_name = _x('Teams', '', THEME_OPT);
    $labels->name_admin_bar = _x('Teams', '', THEME_OPT);
}

if (current_user_can('edit_posts')) {
    add_action('admin_menu', 'revcon_change_post_label');
}

add_action('init', 'revcon_change_post_object');
