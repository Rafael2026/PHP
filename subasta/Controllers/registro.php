<?php
  require_once("Models/Model.php");
  $usuarios = new Modelo();
  $users = $usuarios->getUsuarios();
  require_once("Views/registro.php");
?>