<?php get_header();
global $post;
$image=get_the_post_thumbnail_url($post,'full');
$post_author_id = $post->post_author;
$post_author = get_the_author_meta( 'display_name' , $post_author_id );
$post_date_string = $post->post_date; //string format in db 2018-07-25 12:31:08
$post_date = new DateTime($post_date_string);
$post_date = $post_date->format('d F Y');

$author_image = get_field( 'photo','user_'.$post_author_id );
$author_linkeid = get_field( 'linkeid','user_'.$post_author_id );
$author_facebook = get_field( 'facebook','user_'.$post_author_id );
$author_twitter = get_field( 'twitter','user_'.$post_author_id );

$author_link = get_author_posts_url($post_author_id);


?>
<?php if (have_posts()): ?>
    <div class="wrapper">
        <section class="banner banner-article">
            <h1 class='banner-article-header header'><?php the_title() ?></h1>
            <div class="blog-page-list-item-img" style='background-image: url(<?php the_post_thumbnail_url('full')?>)'></div>
        </section>
    </div>
<section class="blog-article">
    <div class='blog-article-social'>
        <?php
        if($author_linkeid) echo '<a href="'.$author_linkeid.'" class="blog-article-social-link"><img src="'.get_template_directory_uri().'/inc/urich/img/in.png" alt="#"></a>';
        if($author_facebook) echo '<a href="'.$author_facebook.'" class="blog-article-social-link"><img src="'.get_template_directory_uri().'/inc/urich/img/facebook.png" alt="#"></a>';
        if($author_twitter) echo '<a href="'.$author_twitter.'" class="blog-article-social-link"><img src="'.get_template_directory_uri().'/inc/urich/img/twitter.png" alt="#"></a>';
        ?>
    </div>
    <div class="wrap-section">
        <div class="blog-article-author">
            <div class="blog-article-author-img" style="background-image: url(<?php echo $author_image ?>)"></div>
            <span class="blog-article-author-name"><?php echo $post_author ?></span>
        </div>

        <?php while (have_posts()): the_post() ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

        <hr class="page-line">
        <div class="blog-article-author">
            <div class="blog-article-author-img" style="background-image: url(<?php echo $author_image ?>)"></div>
            <span class="blog-article-author-name"><?php echo $post_author ?></span>
        </div>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h1>

            </article>
            <!-- /article -->

        <?php endif; ?>
    </div>
    <!-- /section -->
</section>

<section class="blog" id ='blog'>
    <div class="wrap-section">
        <div class='header'>
            <h2><?php _e('Read also', THEME_OPT) ?></h2>
        </div>

        <?php do_action('posts_slider', $post_author_id); ?>

    </div>
</section>

<div class="wrap-section">
    <?php get_footer(); ?>
