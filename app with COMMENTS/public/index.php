<?php

use App\services\App;

/**
 * This page will be the one accessible to EVERYONE who try to access the site
 * these 3 lines will be used to create the link to the pages without having to type everything; it will also replace every '\'
 * with '/' to make sure every OS can use them.
 */
$root   = rtrim(str_replace('\\', '/', dirname(__DIR__))).'/';
$public = $root.'public/';
$src    = $root.'src/';

define('PATH_ROOT', $root);
define('PATH_PUBLIC', $public);
define('PATH_SRC', $src);

include($src.'functions/debug.php');

set_error_handler('App\functions\errorHandler');


/**
 * Here we include all the file that will be used
 */
include($src.'features/Runnable.php');
include($src.'features/RunnableInterface.php');
include($src.'features/Stringable.php');
include($src.'features/StringableInterface.php');
include($src.'structures/Resource.php');
include($src.'structures/Service.php');
include($src.'resources/RouterInterface.php');
include($src.'resources/Router.php');
include($src.'services/AppInterface.php');
include($src.'services/App.php');

$app = App::getInstance();
$app();