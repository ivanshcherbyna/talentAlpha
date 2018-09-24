<?php
/*
 * Template Name:Home
 *
 */
?>
<?php get_header();
global $mytheme, $post;
$offers = $mytheme['offer-sections'];
$posts_services = new WP_Query( array( 'category_name' => 'services' ,'post_status' => 'published') );
//$posts_latest_works = new WP_Query( array( 'category_name' => 'latest-works' ,'post_status' => 'published') );

?>



<section class="banner" style="background: url('<?= $mytheme['head-part-background']['url']?>') 100% no-repeat cover;">
    <div>
        <h1 class="banner-header"><?=$mytheme['head-first-string-text']?></h1>
        <h1 class="banner-header"><?=$mytheme['head-second-string-text']?> </h1>
        <a href='<?=$mytheme['link-head-text']?>' class="content-button"><?=$mytheme['head-button']?> </a>
    </div>
</section>
<section id="services" class="services wrapper">
    <?php if($posts_services): ?>
    <h3 class="services-header"><?=$mytheme['second-part-head-text']?></h3>
    <div class="services-list">
        <?php do_action('show_services_posts','services') ;?>
    </div>
    <div class="services-btn">
        <a href='<?=$mytheme['more-link']?>' class="content-button"><?=$mytheme['more-button']?></a>
    </div>
    <?php endif; ?>
</section>
<section id='what_we_offer' class="what_we_offer wrapper">
    <?php if (!empty($offers)): ?>
    <h3 class="what_we_offer-header"><?=$mytheme['third-part-head-text']?></h3>

    <div class="what_we_offer-list">
       <?php foreach ($offers as $offer): ?>
        <div class="what_we_offer-list-item">
            <div class="what_we_offer-list-item-img">
                <img class="what_we_offer-list-item-img-icon" src="<?=$offer['image'] ?>" alt="#">
            </div>
            <div class="what_we_offer-list-item-info">
                <h5 class="what_we_offer-list-item-info-header"><?= $offer['title']?></h5>
                <p class="what_we_offer-list-item-info-text"><?= $offer['description']?></p>
            </div>
        </div>
            <?php endforeach; ?>


    </div>
    <?php  endif; ?>
</section>
<section id='latest_works' class="latest_works ">
    <h3 class="latest_works-header"><?=$mytheme['four-part-head-text']?></h3>

    <div class="latest_works-content portfolio">
        <?php echo do_action('show_my_three_works','latest-works'); ?>
    </div>
    <div class="latest_works-btn">
        <a href='<?= $mytheme['four-part-button-link']?>' class="content-button">View more</a>
    </div>
</section>
<section id='about_us' class="about_us wrapper">
    <h3 class="about_us-header"><?=$mytheme['five-part-head-text']?></h3>
    <div class="about_us-content">
        <div class="about_us-content-part1">
            <p class="about_us-content-part1-text"><?= $mytheme['five-part-content']?></p>
        </div>
        <div class="about_us-content-part2">
            <img class="about_us-content-part2-img" src="<?= $mytheme['five-part-image']['url']?>" alt="#">
        </div>
    </div>
</section>
<section id='contacts' class="request_for_proposal">
    <h3 class="request_for_proposal-header"><?=$mytheme['six-part-head-text']?></h3>
    <div class="request_for_proposal-content">
        <div class="request_for_proposal-content-info wrapper">
            <div class="request_for_proposal-content-info-about">
                <p class="request_for_proposal-content-info-about-text"><?=$mytheme['six-part-content']?></p>
            </div>

                <div class="request_for_proposal-content-form">
                <?= do_shortcode('[contact-form-7 id="129" title="form home"]');?>


            </div>
        </div>
    </div>
</section>


<?php get_footer();

?>
