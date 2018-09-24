<?php get_header();
global $post;
$image=get_the_post_thumbnail_url($post,'full');
$post_author_id=$post->post_author;
$post_author= get_the_author_meta( 'display_name' , $post_author_id );
$post_date_string=$post->post_date; //string format in db 2018-07-25 12:31:08
$post_date = new DateTime($post_date_string);
$post_date=$post_date->format('d F Y');
?>
<hr class='line wrapper'>
<main role="main" style="text-align: center;">
	<!-- section -->
	<section class='article'>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
        <h3 class='page-header'><?= the_title()?></h3>
        <div class="article-content-bg">
            <img src="<?=$image?>" alt="" class="article-content-bg-img">
        </div>
        <article class="article-content">
            <?php the_content(); // Dynamic Content ?>

            <hr class="line">
            <div class = 'article-content-footer'>
                <div class="article-content-signature">by <?= $post_author?></div>
                <div class="article-content-date"><?= $post_date?></div>
            </div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>
