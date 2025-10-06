<?php get_header();
if(have_posts()): while(have_posts()): the_post(); ?>
  <article>
    <h1><?php the_title(); ?></h1>
    <div class="vlog-meta"><?php echo get_the_date(); ?></div>
    <div><?php the_content(); ?></div>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
