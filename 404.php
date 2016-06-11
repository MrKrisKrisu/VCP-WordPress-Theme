<?php get_header(); ?>
<div class="row">
    <div class="col-md-8">
        <main>
            <h1>Seite nicht gefunden #404</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/style/images/404.png" style="width: 100%;"/>
        </main>
    </div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php
get_footer();
