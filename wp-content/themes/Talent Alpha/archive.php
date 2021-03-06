<?php
/*
 * Template Name:Blog
 *
 */
?>
<?php get_header();
global $mytheme, $post;
$posts_teams = get_posts( array(
    'orderby' => 'date',
    'order' => 'DESC',
    'numberposts' => -1,
    'post_status' => 'publish',
    'post_type' => array('post'),
));
?>
<div class="wrapper">
    <section class="banner banner-blog">
        <h1 class = "header"><?php the_title() ?></h1>
        <?php echo get_search_form() ?>
    </section>
</div>
<section class="blog-page">
    <div class="wrap-section">
        <div class="blog-page-list ">

        <?php if($posts_teams): foreach ($posts_teams as $post):
            $image= get_the_post_thumbnail_url($post, 'medium');
            $link = get_permalink($post->ID);
            $title = get_the_title($post);
            ?>
            <a class="blog-page-list-item" href="<?php echo $link ?>">
                <div class="blog-page-list-item-img" style='background-image: url(<?php echo $image ?>)'></div>
                    <div class="blog-page-list-item-info" ><?php echo $title ?></div>
            </a>

        <?php endforeach; endif; ?>
            <!-- add empty div -->
            <div class="blog-page-list-item empty-block"></div>
            <div class="blog-page-list-item empty-block"></div>
        </div>
        <hr class="page-line">
    </div>
</section>


<div class="wrap-section">
    <?php get_footer(); ?>
