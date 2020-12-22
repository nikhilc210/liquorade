<?php
    require_once 'vendor/autoload.php';
    if(!session_id())
    {
        session_start();
    }
    $facebook = new \Facebook\Facebook([
        'app_id'=>'143286990668376',
        'app_secret' => '53b71238feb686609b527a8a3b742e42',
        'default_graph_version' => 'v5.7'


    ]);