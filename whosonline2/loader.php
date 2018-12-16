<?php
load_functions('owl.carousel.min::owl.carousel.min');
load_functions('whos_online2::online2');
register_asset("whos_online2::css/online.css");
register_asset("whos_online2::js/online.js");
register_asset("owl.carousel.min::js/owl.carousel.min.js");
register_asset("owl.theme.default:css/owl.theme.default");
register_asset("owl.carousel.css::owl.carousel.css");


register_pager(
    'members/online2',array(
    'as'=>'online-members2',
    'use'=>'whos_online2::online@index_pager',
    'filter'=>'auth'
));

register_pager('online/members/check2',array(
    'as'=>'online-members-check2',
    'use'=>'whos_online2::online2@check_pager',
    'filter'=>'auth'
));