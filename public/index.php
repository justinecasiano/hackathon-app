<?php

use flight\database\PdoWrapper;
use flight\debug\database\PdoQueryCapture;
use Tracy\Debugger;

/*
 * FlightPHP Framework Skeleton - Simple Implementation
 * 
 * This implementation will be everything in a simple file. Most of what you'll do is probably
 * calling functions instead of controllers.
 * 
 * @copyright   Copyright (c) 2024, Mike Cao <mike@mikecao.com>, n0nag0n <n0nag0n@sky-9.com>
 * @license     MIT, http://flightphp.com/license
                                                                  .____   __ _
     __o__   _______ _ _  _                                     /     /
     \    ~\                                                  /      /
       \     '\                                         ..../      .'
        . ' ' . ~\                                      ' /       /
       .  _    .  ~ \  .+~\~ ~ ' ' " " ' ' ~ - - - - - -''_      /
      .  <#  .  - - -/' . ' \  __                          '~ - \
       .. -           ~-.._ / |__|  ( )  ( )  ( )  0  o    _ _    ~ .
     .-'                                               .- ~    '-.    -.
    <                      . ~ ' ' .             . - ~             ~ -.__~_. _ _
      ~- .       N121PP  .          . . . . ,- ~
            ' ~ - - - - =.   <#>    .         \.._
                        .     ~      ____ _ .. ..  .- .
                         .         '        ~ -.        ~ -.
                           ' . . '               ~ - .       ~-.
                                                       ~ - .      ~ .
                                                              ~ -...0..~. ____
   Cessna 402  (Wings)
   by Dick Williams, rjw1@tyrell.net
*/

$ds = DIRECTORY_SEPARATOR;

/*
 * This file is the equivalent of a typical bootstrap file. A bootstrap files 
 * job is to make sure that all the required services, plugins, connections, etc. 
 * are loaded and ready to go for every request made to the application.
 */

// First autoload composer
require(__DIR__ . $ds . '..' . $ds . 'vendor' . $ds . 'autoload.php');
// additionally if you download this and the Flight lib as a zip file and not a composer project, you could
// comment the require above, and uncomment the line below and correct the path to your lib.
// require(__DIR__ . $ds . '..' . $ds . 'path/to/flight/autoload.php');

/*
 * Config
 */
$config_file_path = __DIR__ . $ds . '..' . $ds . 'app/config/config.php';
if (file_exists($config_file_path) === false) {
	Flight::halt(500, 'Config file not found. Please create a config.php file in the app/config directory to get started.');
}
$config = require($config_file_path);

/*
 * Services
 * 
 * A "service" is basically something special that you want to use in your app.
 * For instance, need a database connection? You can set up a database service.
 * Need caching? You can setup a Redis service
 * Need to send email? You can setup a mailgun/sendgrid/whatever service to send emails.
 * Need to send SMS? You can setup a Twilio service.
 * 
 * All the services and how they are configured are setup in the services file.
 * In many cases, services are all attached to something called a "services container"
 * or more simply, a "container". The container manages if you should share the same
 * service, or if you should create a new instance of the service every time you need it.
 * That's a discussion for another day. Suffice to say, that Flight has a basic concept
 * of a services container by registering classes to the Engine/Flight class.
 */


// uncomment the following line for MySQL
$dsn = 'mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['dbname'] . ';charset=utf8mb4';

// uncomment the following line for SQLite
// $dsn = sqlite:' . $config['database']['file_path'];

// Uncomment the following lines for a Flight::db() service
// In development, you'll want the class that captures the queries for you. In production, not so much.
$pdoClass = Debugger::$showBar === true ? PdoQueryCapture::class : PdoWrapper::class;
$app->register('db', $pdoClass, [$dsn, $config['database']['user'] ?? null, $config['database']['password'] ?? null, [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]]);

// At this point, your app should have all the instructions it needs and it'll
// "start" processing everything. This is where the magic happens.

require_once __DIR__ . '/../app/config/bootstrap.php';
require_once __DIR__ . '/../app/config/routes.php';

Flight::start();

/*
 .----..---.  .--.  .----.  .---.     .---. .-. .-.  .--.  .---.    .----. .-. .-..----. .----..-.  .-.
{ {__ {_   _}/ {} \ | {}  }{_   _}   {_   _}| {_} | / {} \{_   _}   | {}  }| { } || {}  }| {}  }\ \/ / 
.-._} } | | /  /\  \| .-. \  | |       | |  | { } |/  /\  \ | |     | .--' | {_} || .--' | .--'  }  {  
`----'  `-' `-'  `-'`-' `-'  `-'       `-'  `-' `-'`-'  `-' `-'     `-'    `-----'`-'    `-'     `--'  
*/
