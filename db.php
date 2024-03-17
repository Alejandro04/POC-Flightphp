<?php

require 'vendor/autoload.php';

$CONFIG='db';
$TYPE='PDO';
$PATH='mysql:host=localhost;dbname=database';
$USER='root';
$PASSWORD='mysql';

Flight::register($CONFIG, $TYPE, array($PATH, $USER, $PASSWORD));