<?php 
// all the plugin menu definations


add_action('admin_menu', 'r_any_point_weather_menus',30);
function r_any_point_weather_menus(){

    add_menu_page(
        __( 'Point Weather', 'my-textdomain' ),
        __( 'Point Weather', 'my-textdomain' ),
        'manage_options',
        'any-point-weather',
        'r_any_point_weather_contents',
        'dashicons-location',
        2
    );

}



function r_any_point_weather_contents() {

    ob_start();
    require_once plugin_dir_path( __FILE__ ) . 'page/any-point-weather-form.php';
    echo ob_get_clean();
}
