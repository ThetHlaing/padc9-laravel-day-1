<?php
require_once('./vendor/autoload.php');
//run the following commend
//composer require monolog/monolog

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('This is a logger');
$log->pushHandler(new StreamHandler('./log/my.log', Logger::WARNING));

$log->warning('Foo');
$log->error('Bar');
