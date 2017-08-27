<?php
  session_start();

  global $pdo;

  try {
    $pdo = new PDO("mysql:host=mysql796.umbler.com;port=41890;dbname=classificadosea", "emanuelalderete", "#manosete7");
  } catch (PDOException $e) {
    echo "FALHOUla: ".$e->getMessage();
  }

 ?>
