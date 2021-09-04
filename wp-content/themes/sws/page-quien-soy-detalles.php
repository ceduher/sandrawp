<?php
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();
?>
<div class="content">
   <?php the_content(); ?>
</div>
<?php          
get_footer();