<?php
get_header(); ?>

<?php get_template_part('template-parts/cover'); // Include the reusable cover section ?>

<article class="single-post">
  <header class="post-header">
    <div class="post-meta">
      <span class="post-date"><?php the_date(); ?></span>
      <span class="post-category"><?php the_category(); ?></span>
    </div>
  </header>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <footer class="post-footer">
    <div class="post-tags">
      <?php the_tags(); ?>
    </div>
    <div class="post-share"> <p>Pasidalinti:</p>
  <ul class="share-icons">
    <li><a href="#" class="facebook">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb_icon.png" alt="fb">
    </a></li>
    <li><a href="#" class="instagram">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_icon.png" alt="ig">
    </a></li>
    <li><a href="#" class="youtube">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube_icon.png" alt="youtube">
    </a></li>
    <li><a href="#" class="pinterest">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/pinterest-icon.png" alt="pinterest">
    </a></li>
  </ul>
</div>
  </footer>
</article>
<?php
get_footer();
?>
