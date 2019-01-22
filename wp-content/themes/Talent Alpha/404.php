<?php get_header(); ?>

<div class="wrapper">
    <section class="banner banner-error">
        <div class='banner-error-text'>404</div>
        <p class="banner-content"><?php _e('A website you are looking for doesn’t exist', THEME_OPT) ?></p>
        <a href="<?php echo home_url() ?>" class="content-button"><?php _e('Go to Home Page', THEME_OPT) ?></a>
    </section>
</div>

<?php get_footer('404'); ?>
