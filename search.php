<?php
get_header(); ?>

<div class="search-results">
    <h1><?php printf( esc_html__( 'Search Results for: %s', 'exit-game-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

    <?php if ( have_posts() ) : ?>
        <ul>
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no results found.', 'exit-game-theme' ); ?></p>
    <?php endif; ?>
</div>

<?php
get_footer();