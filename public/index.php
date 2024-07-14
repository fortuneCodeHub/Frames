<?php
session_start();
/** Valid PHP Version  */
$minPHPVersion = "8.0";
if (phpversion() < $minPHPVersion) {
    die("Your PHP Version must be $minPHPVersion or higher to run this app. Your current version is ". phpversion());
}

// Path to this file
define("ROOTPATH", __DIR__. DIRECTORY_SEPARATOR);


// The autoloader
require_once "../app/core/init.php";
require_once "../app/core/config.php";

DEBUG ? ini_set("display_errors", 1) : ini_set("display_errors", 0);

$app = new App();
$app->loadController();
