<?php
/**
 * Plugin Name: WP All Import - Fix emoji import
 * Version: 1.0
*/

add_filter('wp_all_import_is_enabled_stream_filter', 'wpai_wp_all_import_is_enabled_stream_filter', 10, 1);
function wpai_wp_all_import_is_enabled_stream_filter($filter_is_active) {
    $filter_is_active = false;

    return $filter_is_active;
}

add_filter('wp_all_import_csv_to_xml_remove_non_ascii_characters', 'wpai_wp_all_import_csv_to_xml_remove_non_ascii_characters', 10, 1);
function wpai_wp_all_import_csv_to_xml_remove_non_ascii_characters($filter_is_active) {
    $filter_is_active = false;

    return $filter_is_active;
} 
