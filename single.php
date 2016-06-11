<?php get_header(); ?>
<div class="row">
    <div class="col-md-8">
        <main>
            <?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                    ?>
                    <div class="news">
                        <h3><?php the_title(); ?></h3>
                        <span class="author" style="display: none;">Geschrieben von <?php the_author(); ?> am <?php the_date("d.m.Y"); ?></span>
                        <article><?php the_content(); ?></article>
                        <div class="clear"></div>

                        <div style="border: #004287 solid 1px; background-color: #e7e7e7; padding: 15px; margin-bottom: 30px;" id="authorBox">
                            <?php echo get_avatar(get_the_author_meta('ID'), 100, NULL, 'Profilbild von ' . get_the_author()); ?>
                            <table>
                                <tr>
                                    <td style="font-weight: bold;">Geschrieben von: </td>
                                    <td><?php the_author(); ?></td>
                                </tr>
                                <tr <?php echo (get_the_author_meta('funktionStamm') == '' ? 'style="display: none;"' : ''); ?>>
                                    <td style="font-weight: bold;">Funktion im Stamm: </td>
                                    <td><?php the_author_meta('funktionStamm'); ?></td>
                                </tr>
                                <tr <?php echo (get_the_author_meta('pfadiSince') == '' ? 'style="display: none;"' : ''); ?>>
                                    <td style="font-weight: bold;">Pfadfinder seit: </td>
                                    <td><?php the_author_meta('pfadiSince'); ?></td>
                                </tr>
                            </table>
                            <div class="clear"></div>
                        </div>
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
<?php
get_footer();
