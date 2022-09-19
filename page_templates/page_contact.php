<?php
    /**
     * Template name: Kontakt
     */
get_header(); ?>

<main class="quorum quorum--contact">
    <section class="contactInfo">
        <div class="contactInfo__wrap container">
            <div class="contactInfo__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/resicapital_logo.svg'; ?>"/>
            </div>
            <div class="contactInfo__info">
                <a href="tel:+48530075031">+48 530 075 031</a>
				<a href="tel:+48530052270">+48 530 052 270</a>
                <a href="mailto:kontakt@resicapital.pl">kontakt@resicapital.pl</a>
            </div>
            <div class="contactInfo__social">
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
    </section>
</main>

<?php get_footer(); ?>