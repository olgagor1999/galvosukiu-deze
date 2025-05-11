<?php
/**
 * The template for displaying individual pages.
 */

get_header(); ?>

<?php get_template_part('template-parts/cover'); // Include the reusable cover section ?>

<section class="page-wrapper">
  <div class="page-content">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        // Load the content template
        get_template_part( 'template-parts/content' );
      }
    } else {
      // Fallback message for no content
      echo '<p class="no-content">' . esc_html__( 'Sorry, no content is available on this page.', 'exit-game-theme' ) . '</p>';
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>