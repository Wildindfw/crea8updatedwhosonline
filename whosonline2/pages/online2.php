<?php
function index_pager($app){
    $app->setTitle(lang("whos_online2::whos_online2"));
   return $app->render(view('whos_online2::members'));
}
function check_pager($app){
    return json_encode(array('v'=>view('whos_online2::online2',array('limit'=>10))));
}
