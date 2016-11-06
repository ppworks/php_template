<?php

require_once __DIR__.'/../vendor/autoload.php';

$hoge = new \App\Hoge('ppworks');
$message = "Hi, $hoge->name";

echo $message;
