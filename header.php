<?php 
/**
 * Header Template
 * 
 * @package Webpage_2
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <title>Web Page 2</title>

    <?php wp_head(); ?>
    
</head>
<body>

<header>

    <div class="container-fluid" id="nav-wrap">
        
        <nav class="row navbar no-gutters">

            <span class="open-slide">
                
                <a href="#" onclick="openSlideMenu()">
        
                    <svg width="30" height="30">
                        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                    </svg>

                    <div id="nav-container">

                        <div>

                                <?php 
                                    wp_nav_menu(

                                        array(
                                            'theme_location' => 'top-menu',
                                            'menu-class' => 'top-bar'               
                                        )

                                    );
                                ?>
                        
                        </div>

                    </div>

                </a>

            </span>

        </nav>

        <div class="side-nav" id="side-menu">

            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>

            <?php 
                wp_nav_menu(

                    array(
                        'theme_location' => 'top-menu',
                        'menu-class' => 'top-bar'               
                    )

                );
                
            ?>

        </div>

    </div>

</header>



    
