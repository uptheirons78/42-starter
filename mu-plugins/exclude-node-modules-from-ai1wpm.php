<?php
/**
* If you are using All In One WP Migration
* this code will exclude node_modules folder from its export files
*/
function mb_ai1wm_exclude_node_modules ($exclude_filters) {
$exclude_filters[] = '42-theme/node_modules';
return $exclude_filters;
}

add_filter( 'ai1wm_exclude_themes_from_export', 'mb_ai1wm_exclude_node_modules' );