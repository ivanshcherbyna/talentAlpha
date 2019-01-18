<?php
/*
 * Template Name:Home
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

//four section variable
$fourSectionHead = redux_post_meta(THEME_OPT, $post->ID, 'four-part-head-text');
$fourSectionRepeater = redux_post_meta(THEME_OPT, $post->ID, 'section-four-repeater-items');

//fifth section variable
$fiveHead= redux_post_meta(THEME_OPT, $post->ID, 'five-part-head-text');

$fiveHeadLeft = redux_post_meta(THEME_OPT, $post->ID, 'five-left-head');
$fiveimgLeft = redux_post_meta(THEME_OPT, $post->ID, 'five-left-img');
$fivelistLeft = redux_post_meta(THEME_OPT, $post->ID, 'five-left-list');
$fivebuttonTextLeft = redux_post_meta(THEME_OPT, $post->ID, 'five-left-button-text');
$fivebuttonLinkLeft = redux_post_meta(THEME_OPT, $post->ID, 'five-left-button-link');

$fiveimgRight = redux_post_meta(THEME_OPT, $post->ID, 'five-right-img');
$fiveHeadRight = redux_post_meta(THEME_OPT, $post->ID, 'five-right-head');
$fivelistRight = redux_post_meta(THEME_OPT, $post->ID, 'five-right-list');
$fivebuttonTextRight = redux_post_meta(THEME_OPT, $post->ID, 'five-right-button-text');
$fivebuttonLinkRight = redux_post_meta(THEME_OPT, $post->ID, 'five-right-button-link');

//six section variable
$sixthHead= redux_post_meta(THEME_OPT, $post->ID, 'sixth-part-head-text');

$founderFirstName = redux_post_meta(THEME_OPT, $post->ID, 'team-founder1-name');
$founderFirstPhoto = redux_post_meta(THEME_OPT, $post->ID, 'team-founder1-img');
$founderFirstLink = redux_post_meta(THEME_OPT, $post->ID, 'team-founder1-link');

$founderSecondName = redux_post_meta(THEME_OPT, $post->ID, 'team-founder2-name');
$founderSecondPhoto = redux_post_meta(THEME_OPT, $post->ID, 'team-founder2-img');
$founderSecondLink = redux_post_meta(THEME_OPT, $post->ID, 'team-founder2-link');

$founderThirdName = redux_post_meta(THEME_OPT, $post->ID, 'team-founder3-name');
$founderThirdPhoto = redux_post_meta(THEME_OPT, $post->ID, 'team-founder3-img');
$founderThirdLink = redux_post_meta(THEME_OPT, $post->ID, 'team-founder3-link');
//PLATFORM TEAM
$platformTeamHeadText = redux_post_meta(THEME_OPT, $post->ID, 'team-platform-head');
$platformTeamList = redux_post_meta(THEME_OPT, $post->ID, 'team-repeater-items');
//ADVISORS
$advisorsHeadText = redux_post_meta(THEME_OPT, $post->ID, 'advisors-head');
$advisorsList = redux_post_meta(THEME_OPT, $post->ID, 'advisors-repeater-items');

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
<div class="vision-about" id="vision">
    <div class="wrap-section">
        <div class="vision-about-info">
            <h2><?= $secondHead ?></h2>
            <?= $secondSectionString ?>
            <a href="<?= $secondScheduleLink ?>" class="content-button">Schedule a call </a>
        </div>
        <div class="vision-about-img">
            <img src="<?= get_template_directory_uri().'/inc/urich/img/vision.png' ?>" alt="#" class='vision-about-img-photo'>
            <img src="<?= get_template_directory_uri().'/inc/urich/img/ta_logo.png' ?>" alt="#" class='vision-about-img-logo'>
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
                    <img src="<?= $fourImage1['url'] ?>" class="vision-steps-item-img-4a">
                    <img src="<?= $fourImage2['url'] ?>" class="vision-steps-item-img-4b">
                    <img src="<?= $fourImage3['url'] ?>" class="vision-steps-item-img-4c">
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
            <? if($fourSectionRepeater): foreach ($fourSectionRepeater as $block): ?>
            <a class="info-list-item" href="<?= $block['info-list-item-link'] ?>">
                <div class='info-list-item-wrap'>
                    <div class="info-list-item-img"></div>
                    <h4 class='info-list-item-header'><?= $block['info-list-item-header'] ?> </h4>
                    <p class='info-list-item-text'><?= $block['info-list-item-text'] ?></p>
                </div>
            </a>
            <? endforeach; endif; ?>
        </div>
    </section>
</div>
<div class="wrap-section">
    <section class="early_adopters">
        <h2><?= $fiveHead ?></h2>
        <div class="early_adopters-list">
            <div class="early_adopters-list-item">
                <img src="<?= get_template_directory_uri().'/inc/urich/img/pero-hover.svg' ?>" alt="#">
                <h4 class="early_adopters-list-item-header"><?= $fiveHeadRight?></h4>
                <ul class="early_adopters-list-item-content">
                    <? if (is_array($fivelistRight)): foreach ($fivelistRight as $item): ?>
                    <li class="early_adopters-list-item-content-text">
                        <p class="early_adopters-list-item-content-text-par"><?= $item ?></p>
                    </li>
                    <? endforeach; endif; ?>
                </ul>
                <a href="<?= $fivebuttonLinkLeft ?>" class="content-button"><?= $fivebuttonTextLeft ?></a>
            </div>
            <div class="early_adopters-list-item">
                <img src="<?= get_template_directory_uri().'/inc/urich/img/pero-hover.svg' ?>" alt="#">
                <h4 class="early_adopters-list-item-header"><?= $fiveHeadRight ?></h4>
                <ul class="early_adopters-list-item-content">
                    <? if (is_array($fivelistRight)): foreach ($fivelistRight as $item): ?>
                        <li class="early_adopters-list-item-content-text">
                            <p class="early_adopters-list-item-content-text-par"><?= $item ?></p>
                        </li>
                    <? endforeach; endif; ?>
                </ul>
                <a href="<?= $fivebuttonLinkRight ?>" class="content-button"><?= $fivebuttonTextRight ?></a>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <h2><?= $sixthHead ?></h2>
        <h5 class="team-header">FOUNDERS</h5>
        <div class="team-founders">
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?= $founderFirstName ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?= $founderFirstPhoto['url'] ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?= $founderFirstLink ?>' class="team-founders-item-link"><img src="<?= get_template_directory_uri().'/inc/urich/img/plus.png' ?>" alt="" class="team-founders-item-plus"></a>
                </div>

            </div>
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?= $founderSecondName ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?= $founderSecondPhoto['url'] ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?= $founderSecondLink ?>' class="team-founders-item-link"><img src="<?= get_template_directory_uri().'/inc/urich/img/plus.png' ?>" alt="" class="team-founders-item-plus"></a>
                </div>

            </div>
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?= $founderThirdName ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?= $founderThirdPhoto['url'] ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?= $founderThirdLink ?>' class="team-founders-item-link"><img src="<?= get_template_directory_uri().'/inc/urich/img/plus.png' ?>" alt="" class="team-founders-item-plus"></a>
                </div>
            </div>
        </div>
        <div class='team-content'>
            <div class='team-content-item'>
                <h5 class="team-header"><?= $platformTeamHeadText ?></h5>
                <div class='team-content-item-about'>
                    <? if ($platformTeamList): foreach ($platformTeamList as $item): ?>
                    <div class='team-content-item-about-block'>
                        <a href="<?= $item['team-item-link'] ?>">
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'><?= $item['team-item-name'] ?></span>
                        </a>
                    </div>
                    <? endforeach; endif; ?>
                </div>
            </div>
            <div class='team-content-item'>
                <h5 class="team-header"><?= $advisorsHeadText ?></h5>
                <div class='team-content-item-about'>
                    <? if ($advisorsList): foreach ($advisorsList as $item): ?>
                    <div class='team-content-item-about-block'>
                    <a href="<?= $item['advisors-item-link'] ?>">
                        <div class='team-content-item-about-block-photo'></div><span class='team-content-item-about-block-name'><?= $item['advisors-item-name'] ?></span>
                    </a>
                    </div>
                    <? endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="blog" id ='blog'>
    <div class="wrap-section">
        <div class='blog-header'>
            <h2>Blog</h2>
            <div>
                <button type="button" class="prev"><img src="<?= get_template_directory_uri().'/inc/urich/img/Vector.svg' ?>" alt=""> </button>
                <button type="button" class="next"><img src="<?= get_template_directory_uri().'/inc/urich/img/Vector.svg' ?>" alt=""> </button>
            </div>
        </div>
        <div class="blog-list slick-slider">
            <? if($posts_teams): foreach ($posts_teams as $post):
                $image= get_the_post_thumbnail_url($post, 'medium');
                $link = get_permalink($post->ID);
                $title = get_the_title($post);

                ?>

                    <div class="blog-list-item">
                        <a href='<?=$link?>' "><img class="blog-list-item-img" src="<?= $image ?>" alt=""></a>
                        <div class="blog-list-item-info"><span><?= $title ?></span></div>
                    </div>

            <? endforeach; endif; ?>
        </div>

    </div>
</section>
        <div class="wrap-section">
            <? get_footer(); ?>

