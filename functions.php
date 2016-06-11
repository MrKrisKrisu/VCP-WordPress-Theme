<?php
add_action('init', 'register_menu');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 4',
        'id' => 'footer_4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

function register_menu() {
    register_nav_menus(array('main-menu' => __('Hauptmenü'), 'footer-menu' => __('Footer')));
}

remove_action('wp_head', 'wp_generator');



/*
 * Theme Options
 */
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');

// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init() {
    register_setting('kb_options', 'kb_theme_options', 'kb_validate_options');
}

// Seite in der Dashboard-Navigation erstellen
function theme_options_add_page() {
    add_theme_page('Optionen', 'Optionen', 'edit_theme_options', 'theme-optionen', 'kb_theme_options_page'); // Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion
}

// Optionen-Seite erstellen
function kb_theme_options_page() {
    global $select_options, $radio_options;
    if (!isset($_REQUEST['settings-updated']))
        $_REQUEST['settings-updated'] = false;
    ?>
    <div class="wrap">
        <?php screen_icon(); ?><h2>VCP Theme Einstellungen</h2>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade">
                <p><strong>Einstellungen gespeichert!</strong></p>
            </div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('kb_options'); ?>
            <?php $options = get_option('kb_theme_options'); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Google Analytics</th>
                    <td><input type="text" id="kb_theme_options[gaId]" name="kb_theme_options[gaId]" value="<?php echo esc_textarea($options['gaId']); ?>" placeholder="UA-12345678-1" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Eigenes Stammeslogo<br /><small>Bitte binde eine URL von deinem Stammeslogo ein. Du kannst es vorher unter "Medien" hochladen.</small></th>
                    <td><input type="text" id="kb_theme_options[slURL]" name="kb_theme_options[slURL]" value="<?php echo esc_textarea($options['slURL']); ?>" placeholder="/wp-content/logo.png" /></td>
                </tr>
            </table>
            <p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern" /></p>
        </form>
        <span style="float: right;"><small>Das Design wird zur Verfügung gestellt von <a href="http://vcp-muenden.de/" target="_blank">Kristian Stöckel</a>.</small></span>
    </div>
    <?php
}

function kb_validate_options($input) {
    // $input['copyright'] = wp_filter_nohtml_kses( $input['copyright'] );
    return $input;
}

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
