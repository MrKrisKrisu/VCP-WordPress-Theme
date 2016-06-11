<?php
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');

function theme_options_init() {
    register_setting('kb_options', 'kb_theme_options', 'kb_validate_options');
}

function theme_options_add_page() {
    add_theme_page('Optionen', 'Optionen', 'edit_theme_options', 'theme-optionen', 'kb_theme_options_page'); // Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion
}

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
                <tr valign="top">
                    <th scope="row">F&F Referal Banner aktivieren?<br /><small>Mehr Infos <a href="http://www.fahrtenbedarf.de/ff-shopseiten/rabatte_fuer_linktausch_bei_freizeit_und_fahrtenbedarf.html" target="_blank">*hier*</a>.</small></th>
                    <td><input type="checkbox" id="kb_theme_options[fahrtenbedarfRef]" name="kb_theme_options[fahrtenbedarfRef]" <?php echo ($options['fahrtenbedarfRef'] ? 'checked' : ''); ?> /></td>
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
