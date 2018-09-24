<?php
/*
 * Template Name:Blog
 * Template Post Type: page
 */
?>
<?php get_header(); ?>

<?php $number_posts=(isset($_GET['number_pagination']))? $_GET['number_pagination']:null; ?>
<hr class='line wrapper'>
    <section id="blog" class="wrapper">
        <h3><?= the_title()?></h3>
            <div class="blog-list">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <?php do_action('show_blog_posts','blog', $number_posts); ?>

                <?php endwhile;
                endif; ?>
            </div>
    </section>

<?php get_footer(); ?>
