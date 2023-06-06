<?php
require_once('jugador.php');
class Futbol extends Jugador {
    private $nombre;
    private $equipo;
    private $ficha;
  
    public function __construct($nombre, $equipo, $ficha) {
      $this->nombre = $nombre;
      $this->equipo = $equipo;
      $this->ficha = $ficha;
    }
  
    public function mostrarDatos() {
      echo("<p>Nombre:".$this->nombre."</p>");
      echo("<p>Equipo:".$this->equipo."</p>");
      echo("<p>Ficha:".$this->ficha."</p>");
    }
  }
  
  class Baloncesto extends Jugador {
    private $nombre;
    private $equipo;
    private $ficha;
  
    public function __construct($nombre, $equipo, $ficha) {
      $this->nombre = $nombre;
      $this->equipo = $equipo;
      $this->ficha = $ficha;
    }
  
    public function mostrarDatos() {
        echo("<p>Nombre:".$this->nombre."</p>");
        echo("<p>Equipo:".$this->equipo."</p>");
        echo("<p>Ficha:".$this->ficha."</p>");
        }
  }
?>  