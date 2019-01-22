<?php get_header();
global $mytheme
?>
    <div class="wrapper">
        <section class="banner ">
            <h1><?php the_title(); ?></h1>
        </section>
    </div>
<section class="wrap-section privacy_policy ">
    <!--<h2 class='privacy_policy-header'>Talent Alpha Privacy Policy</h2>-->
    <div class='privacy_policy-content'>
        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile;
        ?>
    </div>
    <hr class="privacy_policy-line">
</section>

    <div class="wrap-section">
<?php get_footer(); ?>