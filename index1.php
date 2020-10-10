  
<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__ . DS);

require BASE_PATH.'vendor/autoload.php';

$app		    = System\App::instance();
$app->request  	= System\Request::instance();
$app->route	    = System\Route::instance($app->request);

$route		= $app->route;

$route->any('/', function() {
    echo 'Hello World<br>';
    echo app('request')->browser().'<br>'; // get client browser
    if (app('request')->isMobile()) {
        echo 'this is a mobile';
    }else {
        echo "it'sn't";
    }

});

// start...

// This example will match any page name.
$route->get('/?', function($page){
    echo "you are in $page";
});

// This example will match anything after post/ - limited to 1 argument.
$route->get('/post/?', function($id){
    // Will match anything like post/hello or post/5 ...
    // But not match /post/5/title
    echo "post id $id";
});

// More than parameters
$route->get('/post/?/?', function($id, $title){
    echo "post id $id and title $title";
});

// others

$route->get('/{username}/{page}', function($username, $page){
    echo "Username $username and Page $page <br>";
    // OR
    echo "Username {$this['username']} and Page {$this['page']}";
});
/**
* http://yoursite.com/mahmoud.elnezamy/profile
* Username mahmoud.elnezamy and Page profile
* Username mahmoud.elnezamy and Page profile
**/

// ends others.

// start for blogs

// Validate args by regular expressions uses :(your pattern here)
$route->get('/{username}:([0-9a-z_.-]+)/post/{id}:([0-9]+)',
function($username, $id)
{
    echo "author $username post id $id";
});

// You can add named regex pattern in route
$route->addPattern([
    'username' => '/([0-9a-z_.-]+)',
    'id' => '/([0-9]+)'
]);

// Now you can use named regex
$route->get('/{username}:username/post/{id}:id', function($username, $id){
    echo "author $username post id $id";
});
/**
* http://yoursite.com/mahmoud.elnezamy/post/10
* author mahmoud.elnezamy post id 10
* http://yoursite.com/mahmoud@elnezamy/post/10
* 404 Not Found
* http://yoursite.com/mahmoud.elnezamy/post/something
* 404 Not Found
**/
// ends for blogs

/**
 * app('request')->server; //$_SERVER
app('request')->path; // uri path
app('request')->hostname;
app('request')->servername;
app('request')->port;
app('request')->protocol; // http or https
app('request')->url; // domain url
app('request')->curl; // current url
app('request')->extension; // get url extension
app('request')->headers; // all http headers
app('request')->method; // Request method
app('request')->query; // $_GET
app('request')->body; // $_POST and php://input
app('request')->args; // all route args
app('request')->files; // $_FILES
app('request')->cookies; // $_COOKIE
app('request')->ajax; // check if request is sent by ajax or not
app('request')->ip(); // get client IP
app('request')->browser(); // get client browser
app('request')->platform(); // get client platform
app('request')->isMobile(); // check if client opened from mobile or tablet
 **/




// End ...
$route->end();
