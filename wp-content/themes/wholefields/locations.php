<?php /* Template Name: Locations */ ?>
<?php get_header(); ?>
<div class="main-wrapper locations-wrapper">
<header class="page-title locations-title">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="heading"><?php the_title() ?></h1>
</header>



<?php 
    if( have_posts() ){
        while( have_posts() ){
            the_post(); //queries database and gets a single post
            the_content(); //now you can call all the other content
            //use the_title() in header.php to get the post/page name
            $post_id = get_the_ID();
            $post_meta = get_post_meta($post_id, 'metatest');
            if(! empty($post_meta)){
                foreach ($post_meta as $value){ ?>
                    <div><p> <?php $value ?></p></div>
                <?php 
                }
            }
            
            
        }
    }
?>
<?php 
    get_footer();
?>