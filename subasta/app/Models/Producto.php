<?php

  class Producto {
  
    private $con;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'subasta');
    }

    // Otener todos los productos
    public function getProductos() {

      $selectProducts = $this->con->query("SELECT * FROM producto");

      while ($row = mysqli_fetch_array($selectProducts)) { $productos[] = $row; }

      return $productos;
    }

    // Añadir un producto
    public function addProductos($nombre, $material, $anchura, $altura, $codSubasta) {

      $insertProductos = $this->con->query("INSERT INTO producto(nomProd, material, anchura, altura, codSubasta) VALUES (nomProd=$nombre, material=$material, anchura=$anchura, altura=$altura, codSubasta=$codSubasta)");

      while ($row = mysqli_fetch_array($insertProductos)) { $productos[] = $row; }

      return $productos;
    }

    // Eliminar un producto
    public function deleteProductos($codigo) {
      
      $deleteProductos = $this->con->query("DELETE FROM producto WHERE codProd=$codigo");

      while ($row = mysqli_fetch_array($deleteProductos)) { $productos[] = $row; }

      return $productos;
    }

    // Actualizar un producto
    public function updateProductos($codigo, $nombre, $material, $anchura, $altura) {

      $updateProductos = $this->con->query("UPDATE producto SET nomProd=$nombre, material=$material, anchura=$anchura, altura=$altura WHERE codProd=$codigo");

      while ($row = mysqli_fetch_array($updateProductos)) { $productos[] = $row; }

      return $productos;
    }
  }
  
?>