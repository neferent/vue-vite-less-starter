<?php
/**
 * Wordpress will prepend header.php here
 */
?>

<?php get_header(); ?>
<div id="base-mount"></div>
  <?php
    if ( has_excerpt() ) :
      the_excerpt();
    else :
      the_content();
    endif; ?>		
<div id="footer-mount"></div>
<?php get_footer(); ?>

<?php
/**
 * Wordpress will append footer.php here
 */
?>