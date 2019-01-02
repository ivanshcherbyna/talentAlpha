<?php
/*
 * Template Name:Home
 *
 */
?>
<?php get_header();
global $mytheme, $post;
//$offers = $mytheme['offer-sections'];
//$posts_services = new WP_Query( array( 'category_name' => 'services' ,'post_status' => 'published') );
//$posts_latest_works = new WP_Query( array( 'category_name' => 'latest-works' ,'post_status' => 'published') );
//first section variable
$head = redux_post_meta(THEME_OPT, $post->ID, 'head-first-string-text');
$secondString = redux_post_meta(THEME_OPT, $post->ID, 'head-second-string-text');

$leftButton = redux_post_meta(THEME_OPT, $post->ID, 'left-button');
$leftButtonLink = redux_post_meta(THEME_OPT, $post->ID, 'left-link-head-text');
$rightButton = redux_post_meta(THEME_OPT, $post->ID, 'right-button');
$rightButtonLink = redux_post_meta(THEME_OPT, $post->ID, 'right-link-head-text');
//second section variable
$secondHead = redux_post_meta(THEME_OPT, $post->ID, 'second-section-string-text');
$secondSectionString = redux_post_meta(THEME_OPT, $post->ID, 'second-string-text');
$secondScheduleLink = redux_post_meta(THEME_OPT, $post->ID, 'second-shchedule-link');
//third section variable
$leftButtonLink = redux_post_meta(THEME_OPT, $post->ID, 'left-link-head-text');
$rightButton = redux_post_meta(THEME_OPT, $post->ID, 'right-button');
$rightButtonLink = redux_post_meta(THEME_OPT, $post->ID, 'right-link-head-text');
//steps section variables
$firstName = redux_post_meta(THEME_OPT, $post->ID, 'first-step-title');
$firstDecription = redux_post_meta(THEME_OPT, $post->ID, 'first-step-description');
$firstImage = redux_post_meta(THEME_OPT, $post->ID, 'step-image-one');

$secondName = redux_post_meta(THEME_OPT, $post->ID, 'second-step-title');
$secondDecription = redux_post_meta(THEME_OPT, $post->ID, 'second-step-description');
$secondImage1 = redux_post_meta(THEME_OPT, $post->ID, 'step-image-two');
$secondImage2 = redux_post_meta(THEME_OPT, $post->ID, 'step-image-two-2');

$thirdName = redux_post_meta(THEME_OPT, $post->ID, 'third-step-title');
$thirdDecription = redux_post_meta(THEME_OPT, $post->ID, 'third-step-description');
$thirdImage1 = redux_post_meta(THEME_OPT, $post->ID, 'third-step-image-one');
$thirdImage2 = redux_post_meta(THEME_OPT, $post->ID, 'third-step-image-two');

$fourName = redux_post_meta(THEME_OPT, $post->ID, 'four-step-title');
$fourDecription = redux_post_meta(THEME_OPT, $post->ID, 'four-step-description');
$fourImage1 = redux_post_meta(THEME_OPT, $post->ID, 'four-step-image-one');
$fourImage2 = redux_post_meta(THEME_OPT, $post->ID, 'four-step-image-two');
$fourImage3 = redux_post_meta(THEME_OPT, $post->ID, 'four-step-image-three');
$fourLink = redux_post_meta(THEME_OPT, $post->ID, 'four-step-link');


?>
<div class="wrapper">
    <section class="banner ">
        <h1><?= $head ?></h1>
        <p class='banner-content'><?= $secondString; ?></p>
        <div class='banner-bottom'>
            <span class='banner-bottom-text'>Join as Early Adopter:</span>
            <div class='banner-bottom-btns'>
                <div class="content-button"><a href="<?= $leftButtonLink ?>" class="content-button-link"><?= $leftButton ?></a></div>
                <div class="content-button"><a href="<?= $rightButtonLink ?>" class="content-button-link"><?= $rightButton ?></a></div>
            </div>
        </div>
    </section>
</div>
<div class="vision-about">
    <div class="wrap-section">
        <div class="vision-about-info">
            <h2><?= $secondHead ?></h2>
            <?= $secondSectionString ?>
            <a href="<?= $secondScheduleLink ?>" class="content-button">Schedule a call </a>
        </div>
        <div>

        </div>
    </div>
</div>
<div class="wrapper">
    <section class="vision">
        <div class="vision-steps">
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <img src="<?= $firstImage['url'] ?>" class="vision-steps-item-img-step1">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">1</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?= $firstName ?></h3>
                        <p class="vision-steps-item-content-info-text"><?= $firstDecription ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <img src="<?= $secondImage1['url'] ?>" class="vision-steps-item-img-step1">
                    <img src="<?= $secondImage2['url'] ?>" class="vision-steps-item-img-step2">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">2</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?= $secondName ?></h3>
                        <p class="vision-steps-item-content-info-text"><?= $secondDecription ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <div class="vision-steps-item-img-step-ellipse"></div>
                    <img src="<?= $thirdImage1['url'] ?>" class="vision-steps-item-img-3a">
                    <img src="<?= $thirdImage2['url'] ?>" class="vision-steps-item-img-3b">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">3</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?= $thirdName ?></h3>
                        <p class="vision-steps-item-content-info-text"><?= $thirdDecription ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <div class="vision-steps-item-img-step-ellipse"></div>
                    <img src="<?= $fourImage1['url'] ?>" class="vision-steps-item-img-step1">
                    <img src="<?= $fourImage2['url'] ?>" class="vision-steps-item-img-step1">
                    <img src="<?= $fourImage2['url'] ?>" class="vision-steps-item-img-step1">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">4</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?= $fourName ?></h3>
                        <p class="vision-steps-item-content-info-text"><?= $fourDecription?></p>
                        <a href="<?= $fourLink ?>" class="content-button">Schedule a call </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="info">
        <h1>Why we are doing this</h1>
        <div class="info-list">
            <a class="info-list-item">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'>Economic Opportunity</h4>
                    <p class='info-list-item-text'>Redefining the way technology professionals engage with projects</p>
                </div>
            </a>
            <a class="info-list-item">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'>Project engagment</h4>
                    <p class='info-list-item-text'>Redefining the way technology professionals engage with projects</p>
                </div>
            </a>
            <a class="info-list-item">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'>Personal data control</h4>
                    <p class='info-list-item-text'>Redefining the way technology professionals engage with projects</p>
                </div>
            </a>
            <a class="info-list-item">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'>Disrupting traditional vendors</h4>
                    <p class='info-list-item-text'>Redefining the way technology professionals engage with projects</p>
                </div>
            </a>
            <a class="info-list-item">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'>Stop wasting client and tech time</h4>
                    <p class='info-list-item-text'>Redefining the way technology professionals engage with projects</p>
                </div>
            </a>
        </div>
    </section>
</div>
<div class="wrap-section">
    <section class="early_adopters">
        <h2>Early adopters</h2>
        <div class="early_adopters-list">
            <div class="early_adopters-list-item">
                <img src="img/pero-hover.svg" alt="#">
                <h4 class="early_adopters-list-item-header">Enterprises</h4>
                <ul class="early_adopters-list-item-content">
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Select from thousands of pre-qualified software engineering
                            teams</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Remove hiring bias, and build the project team based on
                            what matters to you</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Reduce time to hire</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Build virtual bench</p>
                    </li>
                </ul>
                <a href="" class="content-button">Schedule enterprise call</a>
            </div>
            <div class="early_adopters-list-item">
                <img src="img/pero-hover.svg" alt="#">
                <h4 class="early_adopters-list-item-header">Software Houses</h4>
                <ul class="early_adopters-list-item-content">
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Select from thousands of pre-qualified software engineering
                            teams</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Remove hiring bias, and build the project team based on
                            what matters to you</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Reduce time to hire</p>
                    </li>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par">Build virtual bench</p>
                    </li>
                </ul>
                <a href="" class="content-button">Schedule software house call</a>
            </div>
        </div>
    </section>
    <section class="team">
        <h2>Team</h2>
        <h5 class="team-header">FOUNDERS</h5>
        <div class="team-founders">
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><span>Przemek</span> <span>Berendt</span></h3>
                <div class="team-founders-item-img">
                    <img src="img/Ellipse.png" alt="">
                    <a href='' class="team-founders-item-link"><img src="img/plus.png" alt="" class="team-founders-item-plus"></a>
                </div>

            </div>
            <div class="team-founders-item">
                <div class="team-founders-item-img">
                    <img src="img/Mask Group.png" alt="">
                    <a href='' class="team-founders-item-link"><img src="img/plus.png" alt="" class="team-founders-item-plus"></a>
                </div>
                <h3 class="team-founders-item-name"><span>Mike</span> <span>Kennedy</span></h3>
            </div>
            <div class="team-founders-item">
                <div class="team-founders-item-img">
                    <img src="img/Ellipse(1).png" alt="">
                    <a href='' class="team-founders-item-link"><img src="img/plus.png" alt="" class="team-founders-item-plus"></a>
                </div>
                <h3 class="team-founders-item-name"><span>Szymon</span> <span>Niemczura</span></h3>
            </div>
        </div>
        <div class='team-content'>
            <div class='team-content-item'>
                <h5 class="team-header">PLATFORM TEAM</h5>
                <div class='team-content-item-about'>
                    <!-- <div class='team-content-item-about-block'><div class='team-content-item-about-block-photo' style='background:url()'></div><span class='team-content-item-about-block-name'>Tomek</span></div> -->
                    <div class='team-content-item-about-block'>
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'>Tomek</span>
                    </div>
                    <div class='team-content-item-about-block'>
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'>Tomek</span>
                    </div>
                    <div class='team-content-item-about-block'>
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'>Marcel</span>
                    </div>
                </div>
            </div>
            <div class='team-content-item'>
                <h5 class="team-header">ADVISORS</h5>
                <div class='team-content-item-about'>
                    <div class='team-content-item-about-block'>
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'>Anna</span>
                    </div>
                    <div class='team-content-item-about-block'>
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'>Dariusz</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="blog">
    <div class="wrap-section">
        <div class='blog-header'>
            <h2>Blog</h2>
            <div>
                <button type="button" class="prev"><img src="img/Vector.svg" alt=""> </button>
                <button type="button" class="next"><img src="img/Vector.svg" alt=""> </button>
            </div>
        </div>
        <div class="blog-list slick-slider">
            <div class="blog-list-item">
                <img class="blog-list-item-img" src="img/image.png" alt="">
                <div class="blog-list-item-info"><span>Startup Diary</span><span>S01e01</span></div>
            </div>
            <div class="blog-list-item">
                <img class="blog-list-item-img" src="img/image.png" alt="">
                <div class="blog-list-item-info"><span>Startup Diary</span><span>S01e01</span></div>
            </div>
            <div class="blog-list-item">
                <img class="blog-list-item-img" src="img/image.png" alt="">
                <div class="blog-list-item-info"><span>Startup Diary</span><span>S01e01</span></div>
            </div>
            <div class="blog-list-item">
                <img class="blog-list-item-img" src="img/image.png" alt="">
                <div class="blog-list-item-info"><span>Startup Diary</span><span>S01e01</span></div>
            </div>
            <div class="blog-list-item">
                <img class="blog-list-item-img" src="img/image.png" alt="">
                <div class="blog-list-item-info"><span>Startup Diary</span><span>S01e01</span></div>
            </div>
        </div>

    </div>
</section>

        <div class="wrap-section">
            <? get_footer(); ?>


