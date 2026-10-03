<?php

class Persona {
private $nombre;
private $correo;
private $documento;

private static $totalPersonas;


public function __construct($nombre, $correo, $documento){
$this->nombre = $nombre;
$this->correo = $correo;
$this ->documento = $documento;


}
}




?>