<?php
function your_theme_xprofile_cover_image( $settings = array() ) {
    $settings['width']  = 900;
    $settings['height'] = 380;
    return $settings;
}
add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'your_theme_xprofile_cover_image', 10, 1 );
?>