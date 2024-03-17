<?php

function getEstudiantes(){
  $sentencia = Flight::db()->prepare("SELECT * FROM `estudiantes`");
  $sentencia->execute();
  $datos=$sentencia->fetchAll();

  Flight::json($datos);
}

Flight::route('GET /estudiantes', 'getEstudiantes');