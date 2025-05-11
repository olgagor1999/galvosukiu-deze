<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php
        // Display the content
        the_content();

        // Add pagination for paginated posts/pages
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'exit-game-theme' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
</article>