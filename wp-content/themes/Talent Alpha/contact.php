<?php
/*
 * Template Name:Contact
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme; ?>


<div class="contacts-content wrapper">
    <div class="contact-content-header">
        <h1 class="contact-content-header-text"><?= $mytheme['contact-general-text']?></h1>
    </div>
        <div class="contacts-content-info">
        <h3 class='page-header'>ContactS</h3>
        <p class="contacts-content-info-text"><?= $mytheme['contact-top-text']?> </p>
            <?= do_shortcode('[contact-form-7 id="41" title="form contact-page"]')?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
