<?php
/////////////////////////
///////ZOTEC FRAMEWORK
//////admin@zotecsoft.com
////////////////////////
require_once("./config/main.php");

//SET GLOBAL TIME ZONE
date_default_timezone_set("Asia/Karachi");

$env=array(
    "ENV_TYPE"=>"local", // local or production
    "SITE_NAME"=>"Site Name",
    "DESCRIPTION"=>"description",
    "KEYWORDS"=>"keywords",
    "APP_URL"=> "https://banno.local/",
    "ADMIN_EMAIL"=> "info@domain.com",

    //PRODUCTION DATABASE CREDENTIALS
    "DATABASE_HOST"=>"localhost",
    "DATABASE_NAME"=>"mazia",
    "DATABASE_USERNAME"=>"root",
    "DATABASE_PASSWORD"=>"root",


    //LOCAL DATABASE CREDENTIALS
    "LC_DATABASE_HOST"=>"localhost",
    "LC_DATABASE_NAME"=>"mazia",
    "LC_DATABASE_USERNAME"=>"root",
    "LC_DATABASE_PASSWORD"=>"root",

    //SMTP CREDENTIALS
    "SMTP_HOST"=>"smtp.mailtrap.io",
    "SMTP_USERNAME"=>"9fe09591ec711e",
    "SMTP_PASSWORD"=>"3204f9705346b4",
    "SMTP_ENC"=>"tls",
    "SMTP_PORT"=>"2525",
);


use Cycle\Database;
use Cycle\Database\Config;
global $h;
$dbal = new Database\DatabaseManager(
    new Config\DatabaseConfig([
        'default' => 'default',
        'databases' => [
            'default' => ['connection' => 'mysql']
        ],
        'connections' => [
            'mysql' => new Config\MySQLDriverConfig(
                connection: new Config\MySQL\TcpConnectionConfig(
                    database: ($env['ENV_TYPE'] == 'production') ? $env['DATABASE_NAME'] : $env['LC_DATABASE_NAME'] ,
                    host: ($env['ENV_TYPE'] == 'production') ? $env['DATABASE_HOST'] : $env['LC_DATABASE_HOST'] ,
                    port: 3306,
                    user: ($env['ENV_TYPE'] == 'production') ? $env['DATABASE_USERNAME'] : $env['LC_DATABASE_USERNAME'] ,
                    password: ($env['ENV_TYPE'] == 'production') ? $env['DATABASE_PASSWORD'] : $env['LC_DATABASE_PASSWORD'] ,
                ),
                queryCache: true
            ),
            
        ]
    ])
);
$h=$dbal->database('default');
//SESSION
ob_start();



//DEFINE YOUR GLOBAL STUFF HERE
if(isset($_SESSION['users']) && !empty($_SESSION['users'])):
$loginUserId=$_SESSION['users']['id'];
$loginUserType=$_SESSION['users']['type'];
endif;