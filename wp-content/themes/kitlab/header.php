<?php
/**
 * Header (header.php)
 * @package WordPress
 * @subpackage kitlab
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CitLab</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="headerWrapper">
                <a class="logo" href="http://127.0.0.1/home">
                    Tour<b>Company</b>
                </a>
                <nav class="menu_wrapper">
                    <?php
                    wp_nav_menu( array(
                        'menu_class'=>'menu',
                        'theme_location'=>'header_menu',
                        'container' => '',
                    ) );
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <main>