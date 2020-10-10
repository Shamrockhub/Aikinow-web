<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__ . DS);

require BASE_PATH.'vendor/autoload.php';

$app		    = System\App::instance();
$app->request  	= System\Request::instance();
$app->route	    = System\Route::instance($app->request);
$route		    = $app->route;

$route->any('/', function() {
    echo 'Hello World<br>';
    echo app('request')->browser().'<br>'; // get client browser
    if (app('request')->isMobile()) {
        echo 'this is a mobile';
    }else {
        echo "it'sn't";
    }

});
$route->any('/home', function() {
    echo 'Hello World; this is our dashboard<br>';
});

$route->any('/users', function() {
    echo 'Hello World; this is our users page<br>';
});

$route->any('/artissan', function() {
    echo 'Hello World; this is our Artissan page<br>';
});

$route->any('/pay', function() {
    echo 'Hello World; this is our payment list<br>';
});

$route->any('/settings', function() {
    echo 'Hello World; this is our settings<br>';
});

$route->any('/logout', function() {
    echo 'Hello World; this is our logout<br>';
});
// hello
$route->get('/{username}/{page}', function($username, $page){
    $var = "{$this['username']}/{$this['page']}";
    switch ($var) {
        case 'artissan/edit':
            echo "Username {$this['username']} and Page {$this['page']}";
            break;
        case 'users/edit':
            echo "Username {$this['username']} and Page {$this['page']}";
            break;
        case 'artissan/del':
            echo "Username {$this['username']} and Page {$this['page']}";
            break;
        case 'users/del':
            echo "Username {$this['username']} and Page {$this['page']}";
            break;            
        
        default:
            echo app('request')->url.' not found!';
            break;
    }
});
/**
 * app('request')->server; //$_SERVER
 * app('request')->path; // uri path
 * app('request')->hostname;
 * app('request')->servername;
 * app('request')->port;
 * app('request')->protocol; // http or https
 * app('request')->url; // domain url
 * app('request')->curl; // current url
 * app('request')->extension; // get url extension
 * app('request')->headers; // all http headers
 * app('request')->method; // Request method
 * app('request')->query; // $_GET
 * app('request')->body; // $_POST and php://input
 * app('request')->args; // all route args
 * app('request')->files; // $_FILES
 * app('request')->cookies; // $_COOKIE
 * app('request')->ajax; // check if request is sent by ajax or not
 * app('request')->ip(); // get client IP
 * app('request')->browser(); // get client browser
 * app('request')->platform(); // get client platform
 * app('request')->isMobile(); // check if client opened from mobile or tablet
 **/




// End ...
$route->end();
