<?php
// This file contains custom template functions for the Exit Game theme.

if ( ! function_exists( 'exit_game_posted_on' ) ) :
    function exit_game_posted_on() {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );

        $posted_on = sprintf(
            esc_html_x( 'Posted on %s', 'post date', 'exit-game' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
    }
endif;

if ( ! function_exists( 'exit_game_entry_footer' ) ) :
    function exit_game_entry_footer() {
        // Get categories for the post
        $categories_list = get_the_category_list( esc_html__( ', ', 'exit-game' ) );
        if ( $categories_list ) {
            printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'exit-game' ) . '</span>', $categories_list ); // WPCS: XSS OK.
        }

        // Get tags for the post
        $tags_list = get_the_tag_list( '', esc_html__( ', ', 'exit-game' ) );
        if ( $tags_list ) {
            printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'exit-game' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
endif;

if ( ! function_exists( 'exit_game_excerpt' ) ) :
    function exit_game_excerpt( $length = 55 ) {
        $excerpt = get_the_excerpt();
        return wp_trim_words( $excerpt, $length );
    }
endif;
?>