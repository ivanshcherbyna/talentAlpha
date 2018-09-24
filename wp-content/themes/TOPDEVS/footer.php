    <?php global $mytheme; ?>
			<!-- footer -->
			<footer>
                <?php if(!is_page_template('contact.php')): ?>
                <?php if(!is_front_page()): ?>
                    <hr class="line wrapper">
                <?php endif; ?>
                    <div class="footer-content"><?= $mytheme['copy-text']?></div>
                <?php endif; ?>
			</footer>
			<!-- /footer footer-bg -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>
