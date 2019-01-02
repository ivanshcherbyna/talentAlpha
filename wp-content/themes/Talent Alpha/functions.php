<?php
/*
 *  Author: Lenlay
 */

define('THEME_OPT', 'mytheme', true);
/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail

    // Localisation Support
    // load_theme_textdomain(THEME_OPT, get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/


// Load scripts
function lwp_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('themescripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('themescripts');
        wp_register_script('jquery-v-3.3.1', get_template_directory_uri() . '/inc/urich/js/jquery-3.3.1.min.js', array('jquery'), '3.3.1',false); // Custom scripts
        wp_enqueue_script('jquery-v-3.3.1');
    }
}
function talent_alpha_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('my_jquery', get_template_directory_uri() . '/inc/urich/js/jquery.min.js', array('jquery'), '1.0.0',true); // Custom scripts
        wp_enqueue_script('my_jquery');
        wp_register_script('my_scripts', get_template_directory_uri() . '/inc/urich/js/scripts.min.js', array('jquery'), '1.0.0',true); // Custom scripts
        wp_enqueue_script('scripts');
        wp_enqueue_script('my_slick', get_template_directory_uri() . '/inc/urich/js/slick.js', array('jquery'), '1.0.0',true);
//        wp_register_script('jquery-isotope', get_template_directory_uri() . '/inc/urich/js/jquery-isotope.js', array('jquery'), '3.0',true); // Custom scripts
//        wp_enqueue_script('jquery-isotope');
//        wp_register_script('async_script',get_template_directory_uri().'/inc/urich/js/async_ajax.js',array('jquery'), '1.0.0',true);
//        wp_enqueue_script('async_script');

    }
}

// Load styles
function lwp_styles() {

    wp_register_style('themestyle', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');
    wp_enqueue_style('themestyle');

}
function talent_alpha_styles() {

    wp_register_style('talent_alpha__styles', get_template_directory_uri() . '/inc/urich/css/styles.min.css');
    wp_enqueue_style('talent_alpha__styles');

}


// HTML5 Blank navigation
function lwp_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => 'wrapper',
		'container_id'    => 'main-menu',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="header-list">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Register Navigation
function register_lwp_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', THEME_OPT),
    ));
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'teatrhotel'),
        'description' => __('Description for this widget-area...', THEME_OPT),
        'id' => 'widget-area-1',
        'before_widget' => '<ul class="off-canvas-list">',
        'after_widget' => '</ul>',
        'before_title' => '<li><label><h3>',
        'after_title' => '</h3></label></li>'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function lwp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function lwp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function lwp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function lwp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function lwpcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters
\*------------------------------------*/

// Add Actions
add_action('wp_enqueue_scripts', 'lwp_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'talent_alpha_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'lwp_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'talent_alpha_styles'); // Add ZAGA Theme Stylesheet
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'register_lwp_menu'); // Add HTML5 Blank Menu
add_action('init', 'lwp_pagination'); // Add our HTML5 Pagination
// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

require_once "inc/post_types.php";
require_once "inc/fix_core.php";

include_once 'inc/loader.php';

add_action('show_services_posts','get_my_services',10,2);
function get_my_services($category_slug, $numbers=-1)
    {
        $args = array(
            'orderby' => 'date',
            'order' => 'ASC',
            'numberposts' => $numbers,
            'category_name' => $category_slug,
            'post_status' => 'publish',
            'post_type' => array('post')
        );
        $posts = get_posts($args);

        foreach ($posts as $post) :

            setup_postdata($post);
            $title = get_the_title($post);
            $desc = get_the_content($post);
            $desc = substr($desc,0,60);
            $link =get_permalink($post->ID);
            $image = get_the_post_thumbnail_url($post,'full');
            $gradient=redux_post_meta(THEME_OPT,$post,'post-services-color-gradient');

           ?>

            <a href = '<?= $link?>' class="services-list-item" style="border-image-source: linear-gradient(42deg, <?=$gradient['from'].', '.$gradient['to']?>);">
                <div class="services-list-item-wrap">
                    <div class="services-list-item-img">
                        <img src="<?= $image?>" alt="#">
                    </div>
                    <h4 class="services-list-item-header"><?= $title?></h4>
<!--                    <p class="services-list-item-text">--><?//= $desc?><!--</p>-->
                </div>
            </a>

       <?php
        endforeach;
        wp_reset_postdata();
    }
    function show_post_works_html($posts){
        foreach ($posts as $post) :

            setup_postdata($post);
            $title = get_the_title($post);
            $technology = redux_post_meta(THEME_OPT,$post,'post-works-technology');
            $technology =  sanitize_text_field($technology);

            if(strlen($technology)>52){
                substr($technology,0,52);
                 $technology .='...';
            }
            $link =get_permalink($post->ID);
            $image = get_the_post_thumbnail_url($post,'full');
            $gradient = redux_post_meta(THEME_OPT, $post,'post-works-color-gradient');
            $type = redux_post_meta(THEME_OPT,$post,'post-works-type-select');

            if(get_post_meta($post->ID, 'post-service-type') && is_array(get_post_meta($post->ID, 'post-service-type'))) {
               $services = get_post_meta($post->ID, 'post-service-type');

               if(is_array($services[0]))
                   $services_str = implode(" " , $services[0]);
               else
                   $services_str = $services[0];
            }
            ?>

            <a href='<?= $link?>' class="latest_works-content-item" data-category="<?= $type?>" style="background: linear-gradient(196deg, <?=$gradient['from']?>,<?=$gradient['to']?>)" data-metavalue="<?= $services_str?>">
                <h4 class="latest_works-content-item-header"><?= $title?></h4>
                <p class="latest_works-content-item-text">
                    <span class="latest_works-content-item-text-info"><?=  $technology?></span>

                </p>

                <div class="latest_works-content-item-img">
                    <img class="latest_works-content-item-img-mockup" src="<?= $image?>" alt="#">
                </div>
            </a>
        <?php
        endforeach;
    }
add_action('show_latest_works_posts','get_my_works',10,3);
function get_my_works($category_slug, $number_pagination=6)
{
    $all_posts_args=array(
        'orderby' => 'date',
        'order' => 'DESC',
        'numberposts' => -1,
        'category_name' => $category_slug,
        'post_status' => 'publish',
        'fields'          => 'ids',
        'post_type' => array('post')
    );
    $all_post_ids=get_posts($all_posts_args);

    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => $category_slug,
        'post_status' => 'publish',
        'post_type' => array('post'),
    );

    $pagination =  $number_pagination; //if set current pagination
    $numberposts = empty($pagination)? -1: null; // if not set current pagination (show last 6 posts) for start page

    $args['include']=$pagination;
    $args['numberposts']=$numberposts;
    $posts = get_posts($args);
    echo '<input type="hidden" class="all-numbers-posts hidden" value="'.implode( "," ,$all_post_ids).'" data="'.get_permalink().'"/>';
    echo '<div class="latest_works-content portfolio" id="works-content">';
        show_post_works_html($posts);
    echo '</div>';
    wp_reset_postdata();
}

add_action('show_blog_posts','get_my_blog',10,2);

function get_my_three_works($category_slug, $number_posts=3)
{
    $args = array(
        'orderby' => 'date',
        'order' => 'ASC',
        'category_name' => $category_slug,
        'post_status' => 'publish',
        'post_type' => array('post'),
        'numberposts' => $number_posts
    );
    $posts = get_posts($args);
    echo '<div class="latest_works-content portfolio">';
    show_post_works_html($posts);
    echo '</div>';
    wp_reset_postdata();
}
add_action('show_my_three_works','get_my_three_works');

function get_my_all_services($meta_value, $number_posts=-1)
{
    $args = array(
        'orderby' => 'date',
        'order' => 'ASC',
        'numberposts' => $number_posts,
        'post_status' => 'publish',
        'category_name' => 'latest-works',

        'meta_key' => 'post-service-type',
//        'meta_value' => $meta_value,
     //   'meta_query' => array('post-service-type' => $meta_value),
        'post_type' => array('post')
    );
    $posts = get_posts($args);

//    var_dump($posts);
    echo '<div class="latest_works ">';
    echo '<input id="meta_value" type="hidden" value="'.$meta_value.'">';
    echo '<div class="latest_works-content portfolio">';
    show_post_works_html($posts);
    echo '</div>';
    echo '</div>';
    wp_reset_postdata();


}
add_action('show_my_all_works','get_my_all_services');

function get_my_blog($category_slug, $number_pagination=null)
    {
        $all_posts_args=array(
            'orderby' => 'date',
            'order' => 'DESC',
            'numberposts' => -1,
            'category_name' => $category_slug,
            'post_status' => 'publish',
            'fields'          => 'ids',
            'post_type' => array('post')

        );
        $all_post_ids=get_posts($all_posts_args);


    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => $category_slug,
        'post_status' => 'publish',
        'post_type' => array('post'),
    );

        $pagination =  $number_pagination; //if set current pagination
        $numberposts = empty($pagination)? -1 :$pagination; // if not set current pagination (show last 3 posts) for start page

    $args['include']=$pagination;
    $args['numberposts']=$numberposts;

    $posts = get_posts($args);
    echo '<input type="hidden" class="all-numbers-posts hidden" value="'.implode( "," ,$all_post_ids).'" data="'.get_permalink().'"/>';
        foreach ($posts as $post) :

    setup_postdata($post);
    $title = get_the_title($post);

    $content=$post->post_content;
    $post_author_id=$post->post_author;
    $post_author= get_the_author_meta( 'display_name' , $post_author_id );
    $part_content= substr($content,0,230); // only 150 symbols of post content preview
    $link =get_permalink($post->ID);
    $post_date_string=$post->post_date; //string format in db 2018-07-25 12:31:08
    $post_date = new DateTime($post_date_string);
    $post_date=$post_date->format('d F Y'); // object format in June 2, 2018
        $size= array('368','239');
    $image=get_the_post_thumbnail_url($post, 'full');

    ?>
       <!-- Post -->
            <article class="blog-list-item">
                <div class="blog-list-item-img"><img class="blog-list-item-img-bg"  src="<?=$image?>" alt="article"></div>
                <div class="blog-list-item-content">
                    <div class="blog-list-item-content-wrap">
                        <div class="blog-list-item-content-header"><?=$post_date?></div>
                        <div class="blog-list-item-content-body">
                            <h4 class="blog-list-item-content-body-head"><?=$title?> </h4>
                            <p class="blog-list-item-content-body-text"><?=$part_content?></p>
                        </div>
                        <div class="blog-list-item-content-footer">
                            <a href='<?=$link?>' class="content-button">Read</a>
                        </div>
                    </div>
                </div>
            </article>
        <!-- Post -->
<?php
endforeach;
?>
 <div class="pagination">
                <ul>

                </ul>
            </div>
<?php
wp_reset_postdata(); // reset
}



remove_action('wp_head', 'wp_generator');


?>
