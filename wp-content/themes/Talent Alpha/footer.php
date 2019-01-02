    <?php global $mytheme; ?>
			<!-- footer -->
			<footer>
               <div class='footer-logo'><img src="<?= $mytheme['logo-footer-img']['url']; ?>" alt="#"> </div>
                <?php if($mytheme['footer-text']): ?>
                    <div class="footer-info"><?= $mytheme['footer-text']?></div>
                <?php endif; ?>
                <?php if($mytheme['linkedId-text']): ?>
                    <a href="<?= $mytheme['linkedId-text'] ;?>"><img src="<?= get_template_directory_uri().'/inc/urich/img/image(1).png' ?>" alt="#"></a>
                <?php endif; ?>
			</footer>
			<!-- /footer footer-bg -->
		</div>
    <!-- /wrap-section -->
    </div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>
