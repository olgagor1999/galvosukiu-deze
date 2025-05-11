<div class="posts-sidebar">
    <div>Kiti įrašai</div>
    <ul>
        <?php
        $args = array(
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span class="post-date"><?php the_time('F j, Y'); ?></span>
                </li>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </ul>
</div>