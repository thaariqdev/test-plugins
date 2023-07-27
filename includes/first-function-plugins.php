<?php

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Halaman Admin Plugin Pertama', 'Admin Plugin Pertama', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
    echo "<h1>Halo Dunia! V1.0.0</h1>";
    echo "<p>Ini adalah plugin WordPress pertama saya yang dibuat menggunakan bahasa pemrograman PHP</p>";
}
  
?>