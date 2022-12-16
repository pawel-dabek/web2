<footer id="footer">
	<?php include('templates/footer/template.php'); ?>
</footer>
<div class="scripts">
	<?php wp_footer(); ?>
</div>
<div class="modal-contact">
	<div class="modal-close-outer"></div>
	<div class="modal-text">
		<div class="modal-close"><?php echo et_svg('wp-content/themes/ergotree/assets/img/modal-close.svg'); ?></div>
		<p class="c-red w-700"><?php pll_e('Dziękujemy!'); ?></p>
		<p class="message-text"><?php pll_e('Wkrótce skontaktujemy się z Tobą mailowo lub telefonicznie'); ?></p>
		<p class="newsletter-text"><?php pll_e('Wkrótce dostaniesz od nas świeżą porcję jakościowej wiedzy medycznej'); ?></p>
	</div>
</div>
</body>

</html>