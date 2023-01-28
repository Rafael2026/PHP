<?php

  class Puja {

    private $con;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'subasta');
    }

    // Obtener todas las pujas
    public function getPujas() {

      $selectPujas = $this->con->query("SELECT * FROM puja");

      while ($row = mysqli_fetch_array($selectPujas)) { $pujas[] = $row; }

      return $pujas;
    }

    // Obtener puja ganadora
    public function getPujaWin() {

      $winner = $this->con->query("SELECT * FROM puja ORDER BY codPuja desc LIMIT 1;");

      while ($row = mysqli_fetch_array($winner)) { $pujaWin[] = $row; }

      return $pujaWin;
    }

    // Añadir una puja
    public function addPujas($codigo, $value, $date, $codigoUsu, $codigoSub) {

      $insertPujas = $this->con->query("INSERT INTO puja VALUES ('$codigo', '$value', '$date', '$codigoUsu', '$codigoSub')");

      while ($row = mysqli_fetch_array($insertPujas)) { $pujas[] = $row; }

      return $pujas;
    }

    // Eliminar una puja
    public function deletePujas($codigo) {

      $deletePujas = $this->con->query("DELETE FROM puja WHERE codPuja=$codigo");

      while ($row = mysqli_fetch_array($deletePujas)) { $pujas[] = $row; }

      return $pujas;
    }

    // Actualizar una puja
    public function updatePujas($codigo, $value, $date, $codigoUsu, $codigoSub) {

      $updatePujas = $this->con->query("UPDATE puja SET valor=$value, fecha=$date, codUsu=$codigoUsu, codSubasta=$codigoSub WHERE codPuja=$codigo");

      while ($row = mysqli_fetch_array($updatePujas)) { $pujas[] = $row; }

      return $pujas;
    }
  }

?>
