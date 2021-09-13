<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
<h2>
  <a href="<?php the_permalink() ?>">
    <?php the_title(); ?>
  </a>
</h2>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p>There no posts to show</p>
<?php endif; ?>
<?php get_footer();?>