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


<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/page.jpg">
            </div>
        </div>
    </div>
</div>

<!-- user input content -->
<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1>
                        <?php echo get_the_title();?>
                    </h1>
                     </div>   
                        <p class="section-container-spacer">
                            <?php the_content(); ?><!-- Page Content -->
                        </p><!-- .entry-content-page -->
               </div>
            </div>
        </div>
    </div>
</div>



