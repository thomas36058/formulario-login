<?php 

$con = mysqli_connect("localhost", "root", "root", "formulario-login");

// Check connection
if (mysqli_connect_errno()) {
  echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
  exit();
}
