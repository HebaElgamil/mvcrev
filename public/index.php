<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT.DS."app".DS);
define("CONFIG", APP."config");
define("CONTROLLERS", APP."controllers");
define("CORE", APP."core");
define("MODELS", APP."models");
define("VIEWS", APP."views");

//config
define ("SERVER", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "");
define ("DATABASE", "itrax");
define ("DOMAIN_NAME", "https://mvcrev.test");
define ("DATABASE_TYPE","mysql" );


require_once "../vendor/autoload.php";
$app= new MVCREV\core\app();
