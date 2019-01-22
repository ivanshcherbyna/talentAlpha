    <?php global $mytheme; ?>
			<!-- footer -->
			<footer>
               <div class='footer-logo'><img src="<?php echo $mytheme['logo-footer-img']['url']; ?>" alt="talent alpha"> </div>
                <?php if($mytheme['footer-text']){ ?>
                    <div class="footer-info"><?php echo $mytheme['footer-text']; ?></div>
                <?php } ?>
                <?php if($mytheme['linkedId-text']){ ?>
                    <a href="<?php echo $mytheme['linkedId-text'] ;?>"><img src="<?php echo get_template_directory_uri().'/inc/urich/img/image(1).png'; ?>" alt="#"></a>
                <?php } ?>
			</footer>
			<!-- /footer footer-bg -->
		</div>
    <!-- /wrap-section -->
    </div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>
