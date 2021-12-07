<?php  /*Template Name: About Us*/ ?>
<?php get_header() ?>
<div class="main-wrapper">
<header class="page-title">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
    ?>
    <h1 class="heading"><?php the_title() ?></h1>
</header>
<div class="page-content about-content">
<?php 
    if( have_posts() ){
        while( have_posts() ){
            the_post(); //queries database and gets a single post
            the_content(); //now you can call all the other content
            
            
            
        }
    }
?>
</div>
<?php get_footer() ?>