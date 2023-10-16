<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/LIC");
define("BASE_URL", "/LIC");

date_default_timezone_set('Asia/Kolkata');

$connection = new PDO("mysql:host=localhost;port=3306;dbname=lic", "root", "");

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}

session_start();
