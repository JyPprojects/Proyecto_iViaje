<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../env/');
$dotenv->load();


// Constants
$db_pass=$_ENV['DB_PASSWORD'];