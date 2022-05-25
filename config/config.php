<?php
  define("MYSQL_USER", "root");
  define("MYSQL_PASSWORD", "");
  define("MYSQL_DB", "blog");
  define("HOST_NAME", "localhost");
  try{
    $pdo = new PDO(
      "mysql:host=".HOST_NAME.";dbname=".MYSQL_DB,
      MYSQL_USER, MYSQL_PASSWORD
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }catch(Exception $e){
    echo "Fail " . $e;
  }
?>