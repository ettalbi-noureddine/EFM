<?php
/**
 * The template for displaying the footer.
 * @package Ecommerce Solution
 */
?>
    <div class="footer-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>
            </div>
        </div>
    </div>      
	<div class="copyright-wrapper">
        <div class="container">
            <p><?php echo esc_html(get_theme_mod('ecommerce_solution_footer_copy',__('Theme Design & Developed By','ecommerce-solution'))); ?> <?php ecommerce_solution_credit(); ?></p>
        </div>
        <div class="clear"></div>
    </div>
        
    <?php wp_footer(); ?>

</body>
</html>