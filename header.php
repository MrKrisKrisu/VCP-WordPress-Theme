<!DOCTYPE html>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/css/bootstrap.min.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/style/images/logovcp.png" alt="logo" id="logo"/></a>
                <?php printStammeslogo(); ?>
            </div>
            <nav><div class="container"><?php wp_nav_menu(array('theme_location' => 'main-menu', 'depth' => '2')); ?></div></nav>
        </header>