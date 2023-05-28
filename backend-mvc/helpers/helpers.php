<?php

function site_url($route){
    return $_ENV['BASE_URL'].$route;
}

function asset_url($route){
    return site_url("assets/".$route);
}

function view($path,$data=[]){ #path : errors.404
    extract($data);
    $path = str_replace('.','/',$path);
    include_once BASEPATH."views/".$path.".php";
}
