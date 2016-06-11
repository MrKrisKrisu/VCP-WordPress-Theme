<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_1')) : endif; ?></div>
            <div class="col-md-3"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_2')) : endif; ?></div>
            <div class="col-md-3"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_3')) : endif; ?></div>
            <div class="col-md-3"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_4')) : endif; ?></div>
        </div>
    </div>
</footer>
<?php
printGoogleAnalyticsCode();
?>
</body>
</html>
