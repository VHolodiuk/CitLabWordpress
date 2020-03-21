<?php
/**
 * Header (footer.php)
 * @package WordPress
 * @subpackage kitlab
 */
?>
    </main>
    <footer>
    <div class="container">
            <div class="footerWrapper">
                <a class="logo" href="<?php echo $home_link; ?>">
                    Tour<b>Company</b>
                </a>
                <nav class="menu_wrapper">
                    <?php
                    wp_nav_menu( array(
                        'menu_class'=>'menu',
                        'theme_location'=>'footer_menu',
                        'container' => '',
                    ) );
                    ?>
                </nav>
            </div>
        </div>
    </footer>

    
</body>
</html>
