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
        <h1>Blog</h1>
        <?php echo get_search_form() ?>
    </section>
</div>
<section class="blog-page">
    <div class="wrap-section">
        <div class="blog-serch-rezult">
            <span class="blog-serch-rezult-text"><?php  _e( 'Search Results for ', THEME_OPT ); echo '"'.get_search_query().'"'; ?></span>
            <a href="/blog" class="blog-serch-rezult-btn">Clear search</a>
        </div>
        <div class="blog-page-list ">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <a class="blog-page-list-item" href="<?php the_permalink(); ?>">
                    <div class="blog-page-list-item-img" style='background-image: url(<?php the_post_thumbnail_url('medium') ?>)'></div>
                    <div class="blog-page-list-item-info" ><?php the_title(); ?></div>
                </a>
            <?php endwhile; ?>
            <!-- add empty div -->
            <div class="blog-page-list-item empty-block"></div>
            <div class="blog-page-list-item empty-block"></div>
            <?php else:?>
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h2>

                </article>
            <?php endif; ?>
        </div>

    </div>
    <hr class="page-line">
</section>

<div class="wrap-section">
    <?php get_footer(); ?>
