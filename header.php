<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php wp_head(); ?>

        <?php
            $title = wp_title('', false);
            if (strlen($title) > 0) {
                $title = $title . ' | ';
            }
        ?>

        <title><?php echo $title; echo bloginfo( 'name' ); ?></title>

    </head>
    <body>
        <header class="header">
            <div class="left-header">
                <div class="name">
                    <h1><?php echo bloginfo( 'name' ); ?></h1>
                </div>
            </div>
            <div class="right-header">
                <div class="dropdown">
                    <span class="dropbtn fa fa-bars fa-3x" onclick="myFunction()"></span>
                    <div class="dropdown-content" id="myDropdown">
                        <nav>
                            <?php
                            $menu = wp_nav_menu( array (
                                'theme_location' => 'portfolio-menu',
                                'items_wrap' => '%3$s',
                                'container' => false,
                                'echo' => false
                            ) );
                                echo strip_tags($menu, '<a>');
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header
        ><div class="container">