<?php

  class Subasta {
  
    private $con;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'subasta');
    }

    // Obtener todos las subastas
    public function getSubastas() {

      $selectSubastas = $this->con->query("SELECT * FROM subasta");

      while ($row = mysqli_fetch_array($selectSubastas)) { $subastas[] = $row; }

      return $subastas;
    }

    // Añadir una subasta
    public function addSubastas($fechaIni, $fechaFin, $participantes) {

      $insertSubastas = $this->con->query("INSERT INTO subasta(fechaInic, fechaFin, particTotales) VALUES (fechaInic=$fechaIni, fechaFin=$fechaFin, particTotales=$participantes)");

      while ($row = mysqli_fetch_array($insertSubastas)) { $subastas[] = $row; }

      return $subastas;
    }

    // Eliminar una subasta
    public function deleteSubastas($indice) {
      
      $deleteSubastas = $this->con->query("DELETE FROM subasta WHERE codSubasta=$indice");

      while ($row = mysqli_fetch_array($deleteSubastas)) { $subastas[] = $row; }

      return $subastas;
    }

    // Actualizar una subasta
    public function updateSubastas($indice, $fechaIni, $fechaFin, $participantes) {

      $updateSubastas = $this->con->query("UPDATE subasta SET fechaInic=$fechaIni, fechaFin=$fechaFin, particTotales=$participantes WHERE codSubasta=$indice");

      while ($row = mysqli_fetch_array($updateSubastas)) { $subastas[] = $row; }

      return $subastas;
    }
  }
  
?>