<aside>
    <ul id="sidebar">
        <?php
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : endif;
        printFahrtenbedarfReferal();
        ?>
    </ul>
</aside>