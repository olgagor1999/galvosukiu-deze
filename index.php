<?php
/*
Template Name: General Template
*/

get_header(); ?>

<?php
if (is_home() || is_front_page()) {
    get_template_part('blog');
} else {
    // Add your general template content here
}
?>

<?php if (is_active_sidebar('posts-sidebar')) : ?>
    <div class="posts-sidebar">
        <?php dynamic_sidebar('posts-sidebar'); ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>