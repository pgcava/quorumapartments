<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quorum
 */

get_header();
?>

<main class="quorum quorum--subpage">
	<div class="subpageHeading">
		<div class="subpageHeading__wrap container">
			<h1><?php
				if(get_field('page_h1_heading')){
					the_field('page_h1_heading');
				}else{
					the_title();
				}
			?></h1>
		</div>
	</div>
	<div class="subpageContent">
		<div class="subpageContent__wrap container">
			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
