<?php

//  Menu Option 
function add_custom_menu()
{
    add_menu_page(
        'customplugin',
        'Custom Plugin',
        'manage_options',
        'custom-plugin',
        'Custom_Plugin_func',
        'dashicons-share-alt',
        '9'

    );
    add_submenu_page(
        'custom-plugin',
        'Add New',
        'Add New',
        'manage_options',
        'add-new',
        'submenu_plugin_func'
    );
}
add_action('admin_menu', 'add_custom_menu');


?>