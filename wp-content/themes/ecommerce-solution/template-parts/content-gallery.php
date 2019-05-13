<?php
/**
 * The template part for displaying gallery post
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3><?php the_title();?></h3>  
  <div class="box-image">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };

      };
    ?>
  </div>
  <div class="new-text">
    <p><?php the_excerpt();?></p>
  </div>
  <div class="postbtn">
    <a href="<?php the_permalink(); ?>"><?php esc_html_e('View More','ecommerce-solution'); ?></a>
  </div>
</div>