<?php
/*
 * Template Name: Latest Work single
 * Template Post Type: post
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$gradient=redux_post_meta(THEME_OPT,$post,'post-works-color-gradient');
$image_head=redux_post_meta(THEME_OPT,$post,'post-works-image-head');
$type_content =redux_post_meta(THEME_OPT,$post,'post-service-type');

?>

<hr class='line wrapper'>
<section class="projects">
    <h3 class='page-header'><?=the_title() ?></h3>
    <div class="projects-banner">
        <div class="projects-banner-info" style="background: linear-gradient(196deg, <?=$gradient['from']?>,<?=$gradient['to']?>)">
            <div class="projects-banner-info-img">
                <?php if  (!empty($image_head['url'])): ?>
                <img src="<?= $image_head['url']?>" alt="#">
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="projects-content">


        <div class="projects-content-description">
            <h4 class="projects-content-header">Description </h4>

            <p class="projects-content-text"><?=the_post();the_content(); ?></p>

        </div>



        <div class="projects-content-item double">
            <div class="projects-content-item-part">

                <h4 class="projects-content-header">Services </h4>
                <p class="projects-content-text"><?= $mytheme['post-works-services']?></p>
            </div>
            <div class="projects-content-item-part">

                <h4 class="projects-content-header">Category </h4>
                <p class="projects-content-text"><?= $mytheme['post-works-category']?></p>
            </div>
        </div>
        <div class="projects-content-item">
            <h4 class="projects-content-header">Technologies </h4>
            <p class="projects-content-text"><?= $mytheme['post-works-technology']?></p>
        </div>
<!--        <div class="projects-content-item">-->
<!--            <h4 class="projects-content-header">Code Sample  </h4>-->
<!--            --><?php //if(!empty($mytheme['post-works-image-screen']['url'])): ?>
<!--            <div class = 'projects-content-code'><img src="--><?//= $mytheme['post-works-image-screen']['url'] ?><!--" alt="code"></div>-->
<!--            --><?php //endif; ?>
<!--        </div>-->

<!--        <div class="projects-content-item">-->
<!--            <h4 class="projects-content-header">Link: </h4>-->
<!--            <p class="">--><?//= $mytheme['post-works-link']?><!--</p>-->
<!--        </div>-->
    </div>
    <div class="projects-settings wrapper">
        <?php if(!empty($mytheme['post-works-gallery'])): foreach ($mytheme['post-works-gallery'] as $galleryItem): ?>
        <div class="projects-settings-item">
            <img src="<?= $galleryItem['gallery-image']['url']?>" alt="#" class="projects-settings-item-img">
        </div>
        <?php endforeach; endif;?>

    </div>

</section>


<?php get_footer(); ?>
