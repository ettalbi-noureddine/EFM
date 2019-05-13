<?php
/**
 * The template part for displaying grid layout
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<div class="col-lg-4 col-md-4">
  <div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
    <h3><?php the_title();?></h3>  
    <div class="box-image">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>
    </div>
    <div class="new-text">
      <p><?php the_excerpt();?></p>
    </div>
    <div class="postbtn">
      <a href="<?php the_permalink(); ?>"><?php esc_html_e('View More','ecommerce-solution'); ?></a>
    </div>
  </div>
</div>