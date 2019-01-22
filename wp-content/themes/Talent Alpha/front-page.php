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
        <h1 class = "header"><?php echo $head ?></h1>
        <p class='banner-content'><?php echo $secondString; ?></p>
        <div class='banner-bottom'>
            <span class='banner-bottom-text'>Join as an Early Adopter:</span>
            <div class='banner-bottom-btns'>
                <div class="content-button main-banner-btn"><a href="<?php echo $leftButtonLink; ?>" class="content-button-link"><?php echo $leftButton; ?></a></div>
                <div class="content-button main-banner-btn"><a href="<?php echo $rightButtonLink; ?>" class="content-button-link"><?php echo $rightButton; ?></a></div>
            </div>
        </div>
    </section>
</div>
<div class="vision-about">
    <div class="wrap-section" id="vision">
        <div class="vision-about-info">
            <h2 class = "header" ><?php echo $secondHead; ?></h2>
            <?php echo $secondSectionString; ?>
            <a href="<?php echo $secondScheduleLink; ?>" class="content-button">Schedule a call </a>
        </div>
        <div class="vision-about-img">
            <img src="<?php echo get_template_directory_uri().'/inc/urich/img/vision.png'; ?>" alt="#" class='vision-about-img-photo'>
            <img src="<?php echo get_template_directory_uri().'/inc/urich/img/ta_logo.png'; ?>" alt="#" class='vision-about-img-logo'>
        </div>
    </div>
</div>
<div class="wrapper">
    <section class="vision">
        <div class="vision-steps">
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <img src="<?php echo $firstImage['url']; ?>" class="vision-steps-item-img-step1">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">1</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?php echo $firstName; ?></h3>
                        <p class="vision-steps-item-content-info-text"><?php echo $firstDecription; ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <img src="<?php echo $secondImage1['url']; ?>" class="vision-steps-item-img-step1">
                    <img src="<?php echo $secondImage2['url']; ?>" class="vision-steps-item-img-step2">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">2</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?php echo $secondName; ?></h3>
                        <p class="vision-steps-item-content-info-text"><?php echo $secondDecription; ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <div class="vision-steps-item-img-step-ellipse"></div>
                    <img src="<?php echo $thirdImage1['url']; ?>" class="vision-steps-item-img-3a">
                    <img src="<?php echo $thirdImage2['url']; ?>" class="vision-steps-item-img-3b">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">3</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?php echo $thirdName; ?></h3>
                        <p class="vision-steps-item-content-info-text"><?php echo $thirdDecription; ?></p>
                    </div>
                </div>
            </div>
            <div class="vision-steps-item">
                <div class="vision-steps-item-img">
                    <div class="vision-steps-item-img-step-ellipse"></div>
                    <img src="<?php echo $fourImage1['url']; ?>" class="vision-steps-item-img-4a">
                    <img src="<?php echo $fourImage2['url']; ?>" class="vision-steps-item-img-4b">
                    <img src="<?php echo $fourImage3['url']; ?>" class="vision-steps-item-img-4c">
                </div>
                <div class="vision-steps-item-content">
                    <div class="vision-steps-item-content-num">4</div>
                    <div class="vision-steps-item-content-info">
                        <h3 class="vision-steps-item-content-info-header"><?php echo $fourName; ?></h3>
                        <p class="vision-steps-item-content-info-text"><?php echo $fourDecription?></p>
                        <a href="<?php echo $fourLink; ?>" class="content-button">Schedule a call </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="info">
        <h1 class = "header">Why we are doing this?</h1>
        <div class="info-list">
            <?php if($fourSectionRepeater){ 
					foreach ($fourSectionRepeater as $block){ ?>
                <a class="info-list-item" href="<?php echo $block['info-list-item-link']; ?>">
                    <div class='info-list-item-wrap'>
                        <div class="info-list-item-img"></div>
                        <h4 class='info-list-item-header'><?php echo $block['info-list-item-header']; ?> </h4>
                        <p class='info-list-item-text'><?php echo $block['info-list-item-text']; ?></p>
                    </div>
                </a>
			<?php }
					}
			?>
        </div>
    </section>
</div>
<div class="wrap-section">
    <section class="early_adopters">
        <h2 class = "header"><?php echo $fiveHead; ?></h2>
        <div class="early_adopters-list">
            <div class="early_adopters-list-item">
                <img src="<?php echo get_template_directory_uri().'/inc/urich/img/pero-hover.svg'; ?>" alt="#">
                <h4 class="early_adopters-list-item-header"><?php echo $fiveHeadLeft; ?></h4>
                <ul class="early_adopters-list-item-content">
                    <?php if (is_array($fivelistLeft)){
						foreach ($fivelistLeft as $item){ ?>
                        <li class="early_adopters-list-item-content-text">
                            <p class="early_adopters-list-item-content-text-par"><?php echo $item; ?></p>
                        </li>
					<?php }}?>
                </ul>
                <a href="<?php echo $fivebuttonLinkLeft; ?>" class="content-button"><?php echo $fivebuttonTextLeft; ?></a>
            </div>
            <div class="early_adopters-list-item">
                <img src="<?php echo get_template_directory_uri().'/inc/urich/img/pero-hover.svg'; ?>" alt="#">
                <h4 class="early_adopters-list-item-header"><?php echo $fiveHeadRight; ?></h4>
                <ul class="early_adopters-list-item-content">
                    <?php if (is_array($fivelistRight)){ foreach ($fivelistRight as $item){ ?>
                        <li class="early_adopters-list-item-content-text">
                            <p class="early_adopters-list-item-content-text-par"><?php echo $item; ?></p>
                        </li>
                    <?php }} ?>
                </ul>
                <a href="<?php echo $fivebuttonLinkRight; ?>" class="content-button"><?php echo $fivebuttonTextRight; ?></a>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <h2 class = "header"><?php echo $sixthHead; ?></h2>
        <h5 class="team-header">FOUNDERS</h5>
        <div class="team-founders">
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?php echo $founderFirstName; ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?php echo $founderFirstPhoto['url']; ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?php echo $founderFirstLink; ?>' class="team-founders-item-link"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/plus.png'; ?>" alt="" class="team-founders-item-plus"></a>
                </div>

            </div>
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?php echo $founderSecondName; ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?php echo $founderSecondPhoto['url']; ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?php echo $founderSecondLink; ?>' class="team-founders-item-link"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/plus.png'; ?>" alt="" class="team-founders-item-plus"></a>
                </div>

            </div>
            <div class="team-founders-item">
                <h3 class="team-founders-item-name"><?php echo $founderThirdName; ?></h3>
                <div class="team-founders-item-img">
                    <img src="<?php echo $founderThirdPhoto['url']; ?>" alt="" class="team-founders-item-img-photo">
                    <a href='<?php echo $founderThirdLink; ?>' class="team-founders-item-link"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/plus.png'; ?>" alt="" class="team-founders-item-plus"></a>
                </div>
            </div>
        </div>
        <div class='team-content'>
            <div class='team-content-item'>
                <h5 class="team-header"><?php echo $platformTeamHeadText; ?></h5>
                <div class='team-content-item-about'>
                    <?php if ($platformTeamList): foreach ($platformTeamList as $item): ?>
                        <div class='team-content-item-about-block'>
                            <a href="<?= $item['team-item-link'] ?>">
                                <div class='team-content-item-about-block-photo'><img src="<?= $item['team-item-img']['url']?>"> </div><span class='team-content-item-about-block-name'><?= $item['team-item-name'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
            <div class='team-content-item'>
                <h5 class="team-header"><?php echo $advisorsHeadText; ?></h5>
                <div class='team-content-item-about'>
                    <?php  if ($advisorsList): foreach ($advisorsList as $item): ?>
                        <div class='team-content-item-about-block'>
                            <a href="<?= $item['advisors-item-link'] ?>">
                                <div class='team-content-item-about-block-photo'><img src="<?= $item['advisors-item-img']['url'] ?>"></div><span class='team-content-item-about-block-name'><?= $item['advisors-item-name'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
/*
<section class="blog" id ='blog'>
    <div class="wrap-section">
        <div class='blog-header'>
            <h2>Blog</h2>
            <div>
                <button type="button" class="prev"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/Vector.svg'; ?>" alt=""> </button>
                <button type="button" class="next"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/Vector.svg'; ?>" alt=""> </button>
            </div>
        </div>
        <div class="blog-list slick-slider">
            <?php if($posts_teams){ foreach ($posts_teams as $post){
                $image= get_the_post_thumbnail_url($post, 'medium');
                $link = get_permalink($post->ID);
                $title = get_the_title($post);
                $link =get_permalink($post->ID);
                ?>

                <div class="blog-list-item">
                    <a href='<?php echo $link; ?>' ><img class="blog-list-item-img" src="<?php echo $image; ?>" alt=""></a>
                    <div class="blog-list-item-info"><span><?php echo $title; ?></span></div>
                </div>

            <?php }} ?>
        </div>

    </div>
</section>
*/
?>
<section class="blog" id ='blog'>
<div class="wrap-section">
    <?php echo get_footer(); ?>
</section>

