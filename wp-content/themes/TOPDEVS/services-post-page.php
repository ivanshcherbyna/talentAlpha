<?php
/*
 * Template Name: Services
 * Template Post Type: post
 */
?>
<?php get_header(); ?>
 <?php global $mytheme, $post;
//  $type_content =redux_post_meta(THEME_OPT,$post,'post-service-type');
  $type_content = redux_post_meta(THEME_OPT, $post,'post-attr-service-type');
wp_enqueue_script('filter_by_multiple_meta',get_template_directory_uri() . '/inc/urich/js/custom_script.js', array('jquery'), '',false);
  ?>
<hr class='line wrapper'>
<section class="projects location_tracking">
    <div class="projects-content">
        <h3 class='page-header'><?=the_title() ?></h3>


        <div class="projects-content-item">

            <p class="">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                </p>

            <?php endwhile;
                endif; ?>
        </div>

    </div>
</section>
<?= do_action('show_my_all_works',$type_content); ?>


<?php
//var_dump(get_posts(array( 'post_type' => array('post'),'meta_key' => 'post-service-type',   'meta_value' => $type_content ,'category_name' => 'LATEST WORKS' ,'post_status'=>'publish')));
get_footer(); ?>
