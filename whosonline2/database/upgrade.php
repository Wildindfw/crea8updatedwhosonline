<?php

function whos_online_upgrade_database(){
    register_site_page('online-members2', array('title' => 'whos_online2::whos_online2', 'column_type' => TWO_COLUMN_RIGHT_LAYOUT), function() {
        Widget::add(null, 'online-members2', 'content', 'middle');
        Widget::add(null, 'online-members2', 'plugin::relationship|friends', 'right');
        Widget::add(null, 'online-members2', 'plugin::relationship|suggestions', 'right');
        Widget::add(null, 'online-members2', 'plugin::relationship|following', 'right');
        Widget::add(null, 'online-members2', 'plugin::relationship|followers', 'right');

    });
}