
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



    <div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Contact</span>
                Send us a message below
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode('[contact-form-7 id="24" title="Footer Form"]'); ?>
                <div class="copyright">Copyright the Backbeach - All Rights Reserved // Website by Gerardo Gil</div>
        </div>
    </div>
</div>

</div><!-- wrapper end -->
<div class="footer-warning">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-1">
            <img src="http://backbeach.local/wp-content/themes/backbeach-understrap-child/img/glass-cheers.png" alt="" width="84px">
            </div>
            <div class="col-md-10 col-lg-10 col-xl-11">
            <h3>WARNING, Under the Liquor Control Act 1998, it is an offence:</h3>
            <p> To sell or supply liquor to a person under the age of 18 years on a licensed or regulated premises; or 
        for a person under the age of 18 yers to purchase, or attempt to purchase, liquor on a licensed or regulated premises. </p>
            </div>
        </div>
    </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
