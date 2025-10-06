<?php get_header(); ?>

<?php
$args = ['post_type'=>'post','posts_per_page'=>10];
$q = new WP_Query($args);
if($q->have_posts()):
  while($q->have_posts()): $q->the_post(); ?>
    <article class="vlog-item">
      <div class="vlog-thumb"><?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?></div>
      <div>
        <h2 class="vlog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="vlog-meta"><?php echo get_the_date(); ?></div>
        <div><?php the_excerpt(); ?></div>
      </div>
    </article>
  <?php endwhile;
  the_posts_pagination();
  wp_reset_postdata();
else: echo '<p>No posts yet.</p>';
endif;
?>

<?php get_footer(); ?>
