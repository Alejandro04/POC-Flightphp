<?php

require 'vendor/autoload.php';
require 'db.php';
require 'estudiantes.php';

function init(){
  echo "consulta el endpoint /estudiantes";
}

Flight::route('GET /', 'init');
Flight::start();