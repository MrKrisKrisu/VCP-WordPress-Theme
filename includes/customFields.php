<?php
add_action('show_user_profile', 'createPfadiMeta');
add_action('edit_user_profile', 'createPfadiMeta');
add_action('personal_options_update', 'savePfadiMeta');
add_action('edit_user_profile_update', 'savePfadiMeta');

function createPfadiMeta($user) {
    ?>
    <h3>Pfadi-Infos</h3>
    <table class="form-table">
        <tr>
            <th><label for="funktionStamm">Funktion im Stamm</label></th>
            <td>
                <input type="text" name="funktionStamm" id="funktionStamm" value="<?php echo esc_attr(get_the_author_meta('funktionStamm', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description">z.B. Stammesführer, Sippenleitung, Materialwart etc...</span>
            </td>
        </tr>
        <tr>
            <th><label for="pfadiSince">Pfadinder seit</label></th>
            <td>
                <input type="text" name="pfadiSince" id="funktionStamm" placeholder="2010" value="<?php echo esc_attr(get_the_author_meta('pfadiSince', $user->ID)); ?>" class="regular-text" /><br />
            </td>
        </tr>
    </table>
    <?php
}

function savePfadiMeta($user_id) {

    if (!current_user_can('edit_user', $user_id))
        return false;

    update_usermeta($user_id, 'funktionStamm', $_POST['funktionStamm']);
    update_usermeta($user_id, 'pfadiSince', $_POST['pfadiSince']);
}
