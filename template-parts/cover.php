<?php
/**
 * Template Part: Page Cover
 * Description: Displays the page cover with title and breadcrumbs.
 */
?>
<?php
// Get the featured image URL
$cover_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/pabegimo-kambarys-namuose.jpg'; // Fallback to a default image
?>
<section class="page-cover" style="background-image: url('<?php echo esc_url($cover_image); ?>');">
    <div class="page-cover-container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <nav class="breadcrumbs">
            <?php if (function_exists('rank_math_get_breadcrumbs')) {
                echo rank_math_get_breadcrumbs(); // Rank Math breadcrumbs function
            } ?>
        </nav>
    </div>
</section>