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
                        <!-- TODO: Featured Image -->
                        <article><?php the_content(); ?></article>
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
<?php
get_footer();
