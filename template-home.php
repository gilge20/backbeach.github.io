<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="home-banner">
	<div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" c class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" c class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" c class="call-to-action third">
                    <div class="image"></div>
                    <div class="title">Functions</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <p class="tagline">There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with 
                        uninterrupted views of crisp white sand and the Indian Ocean. The place to eat, relax and
                        enjoy.
                    </p>
                    <p>
                        We are proud to support local business and local producers by sourcing as much as possible locally, including 
                        fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from 
                        Ferguson Valley, MArgaret River and throughout the South West. 
                     </p>
                </div>
                <div class="col-lg-3">
                    <div class="button">
                        About us <i class="fa fa-chevron-right"></i>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-img"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6">
               <a href="#" class="news-img">
                    <div class="image"></div>
                    <div class="date">Sun 13 May</div>
                    <div class="category">What's On</div> 
               </a>
            </div>
            <div class="col-xl-1 d-none d-xl-block"></div>
            <div class="col-md-6">
                <h2>Mother's Day</h2>
                <p>
                        Join us to celebrate your dad this Father's Day. 
                        Breakfast and Lunch is pretty full but we're 
                        taking dinner bookings so you can enjoy the best 
                        of our superb location right on the beach.
                        All dinner reservations receive a complimentary box of chocolates as well...
                </p>
                <a href="#" class="button">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay">
        <img src="http://backbeach.local/wp-content/themes/backbeach-understrap-child/img/home-about-top.svg" alt="" width="100%">
        </div>
    <div class="bottom-overlay">
    <img src="http://backbeach.local/wp-content/themes/backbeach-understrap-child/img/home-about-bottom.svg" alt="" width="100%"> 
    </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Served Fresh</span>
                from the paddock to the plate
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <p class="tagline">There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with 
                        uninterrupted views of crisp white sand and the Indian Ocean. The place to eat, relax and
                        enjoy.
                    <p>
                        We are proud to support local business and local producers by sourcing as much as possible locally, including 
                        fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from 
                        Ferguson Valley, MArgaret River and throughout the South West. 
                     </p>
                </div>
                <div class="col-lg-3">
                    <div class="button">
                        Read More <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" c class="call-to-action">
                    <div class="image"></div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" c class="call-to-action second">
                    <div class="image"></div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" c class="call-to-action third">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <h2>Happy Customers</h2>
                        <div class="testimonial-holder">
                        <p>Ah! What a place. I could have breakfast every single day and not get tired by 
                        the views. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if
                        you're visiting Bunbury!</p>
                        <div class="seperator"></div>
                        <div class="author">Saad Ulde</div>
                </div>
    </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Sign Up</span>
                Subscribe to our email newsletter
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-11">
                    <?php echo do_shortcode('[contact-form-7 id="23" title="Newsletter Subscription"]'); ?>
                </div>
            </div>
        </div>
</div>

<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Socials</span>
                Follow us on Facebook & Instagram
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i>
                    What's new on facebook</div>
                    <div class="row">
                        <div class="col-lg-6">
                        <img src="http://backbeach.local/wp-content/themes/backbeach-understrap-child/img/call-to-action-1.jpg">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i> Posted 310 Jun 2022</div>
                                    <div class="likes"> <i class="fa fa-thumbs-up"></i> 24 Likes</div>
                                </div>
                                <p>Check out the view (and the dolphins, they're out there today!) 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus obcaecati quod aut animi, 
                                    deleniti a dolores ea praesentium cupiditate sint distinctio id molestiae ipsam et reprehenderit 
                                    ipsa, accusamus nesciunt at?</p>
                                    <a href="#" class="button">Read on facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder">
                <div class="title">
                        <i class="fa fa-instagram"></i>@backbeachcafe
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
