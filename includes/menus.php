<?php

function register_menu() {
    register_nav_menus(array('main-menu' => __('Hauptmenü'), 'footer-menu' => __('Footer')));
}
