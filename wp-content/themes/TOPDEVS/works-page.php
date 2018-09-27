<?php
/*
 * Template Name: Latest Works
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$number_posts=(isset($_GET['number_pagination']))? $_GET['number_pagination']:null;
$meta_field=(isset($_GET['meta_field']))? $_GET['meta_field']:null;
?>
<input id="hidden_metafield" type="hidden" value="<?= $meta_field ?>">
    <section class="article">
        <div class="latest_works ">
            <h3 class="latest_works-header"><?= the_title()?></h3>
            <nav class="latest_works-tabs">
                <a class="latest_works-tabs-item active-tab" data-filter="All">All projects</a>
                <a class="latest_works-tabs-item" data-filter="Web">Web development</a>
                <a class="latest_works-tabs-item" data-filter="Mobile">Mobile development</a>
            </nav>




                <?= do_action('show_latest_works_posts','latest-works',$number_posts) ?>


            <div class="latest_works-pagination">
                <div class="latest_works-pagination-arrow">
                    <img src="<?= get_template_directory_uri()?>/inc/urich/img/ic-keyboard-arrow-left.png" alt="" id="left-pagination">
                </div>
                <div class="latest_works-pagination-num">
                    <ul class="latest_works-pagination-num-list">
                        <!-- here <li> is add ajax -->
                    </ul>
                </div>
                <div class="latest_works-pagination-arrow">
                    <img src="<?= get_template_directory_uri()?>/inc/urich/img/ic-keyboard-arrow-right.png" alt="" id="right-pagination">
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
