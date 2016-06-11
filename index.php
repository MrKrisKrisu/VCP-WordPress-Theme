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
        <?php get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main>
                        <h1><?php bloginfo('name'); ?></h1>
                        <?php
                        if (have_posts()) {
                            while (have_posts()) : the_post();
                                ?>
                                <div class="news">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <span class="author" style="display: none;">Geschrieben von <?php the_author(); ?> am <?php the_date("d.m.Y"); ?></span>
                                    <!-- TODO: Featured Image -->
                                    <article><?php the_excerpt(); ?></article>
                                    <div class="clear"></div>
                                    <hr class="newsDivider" />
                                </div>
                                <?php
                            endwhile;
                        }
                        ?>
                    </main>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
    </body>
</html>
