<?php
/**
 * The template part for displaying video post
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3><?php the_title();?></h3>  
  <div class="box-image">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
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