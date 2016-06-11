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
$options = get_option('kb_theme_options');
if (isset($options['gaId']) && $options['gaId'] != '') {
    ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '<?php echo $options['gaId']; ?>', 'auto');
        ga('send', 'pageview');

    </script>
    <?php
}
?>
</body>
</html>
