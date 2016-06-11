<?php get_header(); ?>
<div class="row">
    <div class="col-md-8">
        <main>
            <h1><?php bloginfo('name'); ?></h1>
            <?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                    ?>
                    <section class="news">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <article><?php the_excerpt(); ?></article>
                        <div class="clear"></div>
                        <hr class="newsDivider" />
                    </section>
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
