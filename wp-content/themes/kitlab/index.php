<?php
/**
 * Function (index.php)
 * @package WordPress
 * @subpackage kitlab
 * Teamplate Name: my post
 * Templatte Post Type: post, page, product  
 */
get_header();?>

<section class="main">
    <div class="container">
        <h1><?php echo get_the_title(); ?></h1>
        <div class="wrap_img">
            <?php
                while ( have_posts() ) : the_post();
                    if( has_post_thumbnail() ):
                        echo get_the_post_thumbnail();
                    endif;  
                endwhile; 
            ?>
        </div>
        <?php global $more;
            while( have_posts() ) : the_post();
                the_content();
            endwhile; 
        ?>
        
    </div>
</section>



<?php get_footer();?>

