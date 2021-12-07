<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8M79HR8JNN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8M79HR8JNN');
    </script>

    <?php 
    wp_head();
    ?>
</head> 
<header>	    
<nav class="navbar navbar-clear" >
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ham-menu-white.svg" /></span>
    </button>
    
    <div id="navigation"  >
        <div class="wf-logo">
            <?php
            if(function_exists('the_custom_logo')){
                the_custom_logo();
            }
            ?>
        </div>


        <?php 
            wp_nav_menu(
                array(
                    'menu' => 'primary', //registered in functions.php
                    'container' => '',
                    'theme_location' => 'primary', //when user selects theme...this is primary location
                    'items_wrap' => '<ul id="wf-nav" class="wf-nav">%3$s</ul>' //wrap list items with ul 
                )
            );
        ?>			
    </div>
</nav>
</header>
<div class="main-wrapper">
 

<div class="home-content">

    <div class="hero hero-one"> 
        <div class="hero-text">
            <h1>Vegan </br> Dairy-free </br> Delicious</h1>
            <p>All new Oatmilk bars.</p>
            <a href="./products">
                <button class="btn btn-clear btn-capital">Shop Now</btn>
            </a>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/hero-image.webp" />
        </div>
    </div>

    <div class="splash-overlay milk-overlay"></div>

    <div class="hero hero-two">
        
        <div class="hero-text">
            <h1>All New </br> Frozen Fruit Bars</h1>
            <p>Coming Soon</p>
            <!-- <a href="./products"><button class="btn btn-clear btn-capital">Shop Now</btn></a> -->
        </div>
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/fruit-bars.webp" />
        </div>
    </div>

    <div class="splash-overlay pink-overlay"></div>

    <div class="hero intro">
        <img class="oat oat-one" src="<?php echo get_template_directory_uri() ?>/assets/img/home/oat.webp" />
        <img class="oat oat-two" src="<?php echo get_template_directory_uri() ?>/assets/img/home/oat.webp" />

        <h3>Welcome to Wholefield's</h3>
        <div class="intro-slide">
            
            <div class="row">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/stock-1.webp" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/stock-3.webp" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/stock-2.webp" />
            </div>
            <p>Wholefield’s Foods is a brand committed to creating delicious products that everyone can enjoy. With a focus on great taste and quality ingredients, you’d never know that our products were vegan and dairy-free.</p>
        </div>
        <a href="./about-us"><button class="btn btn-green btn-capital">Explore</button></a>
        <div class="intro-cta">
            <div class="cta cta-left">
                <h3>Find Us Near You!</h3>
                <p>Enter your zip code to find our products in the nearest retailer to you!</p>
            </div>
            <div class="cta cta-right">
                <h3>Store Locator</h3>
                <div class="locator">
                    <input type="text" id="enter-zip" class="btn btn-white" value="Enter Zip Code" />
                    <input type="submit" id="search-zip" class="btn btn-green" value="Search" />
                </div>
            </div>
            <div class="cta cta-mobile">
                <h3>Find Us Near You!</h3>
                <p>Enter your zip code to find our products in the nearest retailer to you!</p>
                <form action="locations" class="locator">
                    <input type="text" id="enter-zip" class="btn btn-white" placeholder="Enter Zip Code" />
                    <input type="submit" id="search-zip" class="btn btn-green" value="Search" />
                </form>
            </div>
        </div>
    </div>

</div>




<?php 
get_footer();
?>