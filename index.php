<?php

use Application\Helpers\ExHelper;
use Application\Services\ExService;

define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);

require 'autoload.php';
 
$helper = new ExHelper();
echo "\n";
$service = new ExService();
echo "\n";
