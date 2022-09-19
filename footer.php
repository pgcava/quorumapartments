<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quorum
 */

?>

	<footer id="colophon" class="siteFooter">
		<div class="siteFooter__wrap container">
			<a href="#page" class="siteFooter__logo">
				<img src="<?php echo get_template_directory_uri() . '/images/resicapital_logo.svg'; ?>"/>
			</a>
			<div class="phones">
				<a href="tel:+48530052270" class="phones__phone">+48 530 052 270</a>
				<a href="tel:+48530075031" class="phones__phone">+48 530 075 031</a>
			</div>
			<a href="mailto:kontakt@resicapital.pl" class="mail">kontakt@resicapital.pl</a>
			<div class="siteFooter__social">
				<a href="https://www.facebook.com/ResiCapital" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/images/social_fb.png'; ?>"/>
				</a>
				<a href="https://www.youtube.com/channel/UCg6f22GqoZT1uNH77c3w25A" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/images/social_yt.png'; ?>"/>
				</a>
				<a href="https://www.instagram.com/resi.capital/" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/images/social_ig.png'; ?>"/>
				</a>
				<a href="https://www.linkedin.com/company/resi-capital/" target="_blank">
					<img src="<?php echo get_template_directory_uri() . '/images/social_in.png'; ?>"/>
				</a>
			</div>
		</div>
		<div class="siteFooter__copyrights">
			<div class="container">
				<p>© 2022 Quorum. All rights reserved.</p>
				<p class="contactPhone"></p>
				<a href="#page" class="siteFooter__scrolltop"></a>
				<a href="<?php echo home_url('/informacja-o-przetwarzaniu-danych-osobowych/'); ?>" target="_blank" class="terms">Informacja o przetwarzaniu danych osobowych</a>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="callModal">
		<div class="callModal__wrap">
			<div class="callModal__close"></div>
			<h3>Skontaktuj się z nami</h3>
			<a href="tel:+48530052270"><span>+48 530 052 270</span></a>
			<a href="tel:+48530075031"><span>+48 530 075 031</span></a>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
