<?php

  class Modelo {
  
    private $con;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'subasta');
    }

    public function getUsuarios() {

      $usuarioResult = $this->con->query("SELECT codUsu, nomUsu, apeUsu, fechaUnion FROM usuario WHERE permiso < 1");

      while ($row = mysqli_fetch_array($usuarioResult)) { $usuarios[] = $row; }

      return $usuarios;
    }

    public function getProductos() {

      $productResult = $this->con->query("SELECT * FROM producto");

      while ($row = mysqli_fetch_array($productResult)) { $productos[] = $row; }

      return $productos;
    }

    public function getSubastas() {

      $subastaResult = $this->con->query("SELECT * FROM subasta WHERE precIni > 0");

      while ($row = mysqli_fetch_array($subastaResult)) { $subastas[] = $row; }

      return $subastas;
    }

    public function getPujas() {

      $pujasResult = $this->con->query("SELECT * FROM puja");

      while ($row = mysqli_fetch_array($pujasResult)) { $pujas[] = $row; }

      return $pujas;
    }


    /*
    
    public function addProductos($genero) {
      
      $query = $this->con->query("INSERT INTO genero (genero) VALUES genero=$genero");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $generos[] = $row; }

      return $generos;
    }

    public function delProducto($genero) {
      
      $query = $this->con->query("DELETE FROM genero WHERE genero=$genero");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $generos[] = $row; }

      return $generos;
    }

    public function updateSerie($serie) {
      
      $codigo = $serie[0];
      $fecha = $serie[2];
      $temporadas = $serie[3];
      $puntuacion = $serie[4];
      $argumento = $serie[5];

      $query = $this->con->query("UPDATE serie SET fecha='$fecha' , temporadas='$temporadas', puntuacion='$puntuacion', argumento='$argumento' WHERE ids='$codigo'");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $series[] = $row; }

      return $series;
    }*/
  }
  
?>