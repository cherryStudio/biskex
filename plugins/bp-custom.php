<?php
function biskex_xprofile_cover_image( $settings = array() ) {
    $settings['width']  = 900;
    $settings['height'] = 380;
    return $settings;
}
add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'biskex_xprofile_cover_image', 10, 1 );
add_filter( 'bp_before_groups_cover_image_settings_parse_args', 'biskex_xprofile_cover_image', 10, 1 );
?>
