</div>
<footer>
    <div class="footer-logo row">
        <div class="wf-logo">
        <?php
        if(function_exists('the_custom_logo')){
            the_custom_logo();
        }
        ?>
        </div>
    </div>
    <div class="footer-links row">
        <ul class="col" class="wf-nav">
            <h6>Contact Us</h6>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'contact', //registered in functions.php
                    'container' => '',
                    'theme_location' => 'contact', //when user selects theme...this is primary location
                    'items_wrap' => '<ul id="wf-nav" class="wf-nav">%3$s</ul>' //wrap list items with ul 
                )
            );
            ?>
        </ul>
        <ul class="col">
            <h6>Links</h6>
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'footer', //registered in functions.php
                        'container' => '',
                        'theme_location' => 'footer', //when user selects theme...this is primary location
                        'items_wrap' => '<ul id="wf-nav" class="wf-nav">%3$s</ul>' //wrap list items with ul 
                    )
                );
            ?>	
        </ul>
        <ul class="col">
            <h6>Info</h6>
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'info', //registered in functions.php
                        'container' => '',
                        'theme_location' => 'info', //when user selects theme...this is primary location
                        'items_wrap' => '<ul id="wf-nav" class="wf-nav">%3$s</ul>' //wrap list items with ul 
                    )
                );
            ?>	
        </ul>
        <ul class="col">
            <h6>Follow Us</h6>
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'follow', //registered in functions.php
                        'container' => '',
                        'theme_location' => 'follow', //when user selects theme...this is primary location
                        'items_wrap' => '<ul id="wf-nav" class="wf-nav">%3$s</ul>' //wrap list items with ul 
                    )
                );
            ?>	
        </ul>
        
        
    </div>
    <div class="footer-copy">
        <p class="copyright">&copy; 2020 Wholefield's All Rights reserved.</p>
    </div>
		   
</footer>
    
</div>

<?php 
    wp_footer();
?>

</body>
</html> 