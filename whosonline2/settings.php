<?php
$arr = array(
    'title' => "Who's Online2",
    'description' => '',
    'settings' => array(
        'who_admin_only' => array(
            'type' => 'boolean',
            'title' => lang('whos_online2::only-administrator'),
            'description' => lang('whos_online2::only-administrator-desc'),
            'value' => 0
        ),

    )
);

$version = 7.1;
if (version_compare(app()->version,$version) == 1) {
    //if app()->version is greater than $version=7.1
    return array(
        'site-other-settings' => $arr
    );
} else {
    return $arr;
}
 