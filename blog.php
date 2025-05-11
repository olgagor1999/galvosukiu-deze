<?php
/*
Template Name: Blog Template
*/
?>

<section class="blog-grid">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post-card">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="post-image" />
      </a>
      <div class="post-content">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-tags">
  <?php the_category(); ?>
  <span class="date"><?php echo get_the_date(); ?></span>
</div>
        <p class="post-excerpt"><?php the_excerpt(); ?></p>
      </div>
      <a href="<?php the_permalink(); ?>" class="read-more-btn">Skaityti plačiau</a>
    </article>
  <?php endwhile; endif; ?>
</section>