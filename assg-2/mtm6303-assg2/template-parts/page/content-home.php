<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MT6303_Assignment
 * @since MT6303 Assignment 1.0
 * @version 1.0
 */

?>

<!-- <html lang="en">

<title>Home page</title> -->

<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1>Posuere lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<!-- user input content -->
<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>
                        <?php echo get_the_title();?>
                    </h2>
                    <p> 
                        <?php the_content(); ?><!-- Page Content -->
                    </p><!-- .entry-content-page -->
                </div>
            </div>
        </div>
     </div>
 </div>