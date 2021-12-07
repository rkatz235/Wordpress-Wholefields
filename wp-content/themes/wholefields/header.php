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

<body>
    
    <header>	    
	    <nav class="navbar" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ham-menu.svg" /></span>
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
    