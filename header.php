<!DOCTYPE html>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/style/images/logovcp.png" alt="logo" id="logo"/></a>
                <a href="/der-stamm"><img src="https://vcp-muenden.de/wp-content/uploads/2015/12/wappen_farbe.png" id="logoRight"/></a>
            </div>
            <nav><div class="container"><?php wp_nav_menu(array('theme_location' => 'main-menu', 'depth' => '2')); ?></div></nav>
        </header>