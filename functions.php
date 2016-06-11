<?php
require_once 'includes/customFields.php';
require_once 'includes/themeOptions.php';
require_once 'includes/sidebars.php';
require_once 'includes/menus.php';

remove_action('wp_head', 'wp_generator');

function printGoogleAnalyticsCode() {
    $options = get_option('kb_theme_options');
    if (!isset($options['gaId']) || $options['gaId'] === '')
        return;
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

function printStammeslogo() {
    $options = get_option('kb_theme_options');
    if (!isset($options['slURL']) || $options['slURL'] === '')
        return;
    echo '<img src="' . $options['slURL'] . '" id="stammeslogo"/>';
}

function printFahrtenbedarfReferal() {
    $options = get_option('kb_theme_options');
    if (!isset($options['fahrtenbedarfRef']) || !$options['fahrtenbedarfRef'])
        return;
    echo '  <div>
                <h3 class="widgettitle">Unser Ausrüster</h3>
                <a href="http://www.fahrtenbedarf.de/">
                    <img src="https://vcp-muenden.de/wp-content/uploads/2015/12/ff-banner-vcp480.gif" class="alignnone">
                </a>
            </div>';
}
