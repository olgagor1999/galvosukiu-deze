<?php
get_header(); ?>

<div class="archive-content">
    <div class="container">
        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
        <ul>
            <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>