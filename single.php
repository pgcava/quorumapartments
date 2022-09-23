<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Quorum
 */

get_header();
?>

	<main class="quorum quorum--article">
		<div class="singleContent">
            <div class="singleContent__wrap">
                <div class="singleContent__header">
                    <div class="image">
						<?php echo get_the_post_thumbnail(); ?>
                    </div>
					<p class="date"><?php echo get_the_date('d F Y') ?></p>
					<h1><?php the_title(); ?></h1>
                </div>
				<div class="singleContent__content">
					<?php the_content(); ?>
				</div>
				<div class="singleContent__nav">
					<?php
						the_post_navigation(
							array(
								'prev_text' => esc_html__( 'Previous', 'holistic' ),
								'next_text' => esc_html__( 'Next', 'holistic' ),
							)
						);
					?>
				</div>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_footer();
