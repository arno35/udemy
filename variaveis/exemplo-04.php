<?php
  
  // url da página
  // http://localhost/udemy/variaveis/exemplo-04.php?a=123

  $nome = $_GET["a"];
  var_dump($nome);

  echo "<br/>";

  $nome = (int)$_GET["a"];
  var_dump($nome);
  
  // url da página
  // http://localhost/udemy/variaveis/exemplo-04.php?a=123&b=456

  echo "<br/>";

  $ip = $_SERVER["REMOTE_ADDR"];

  echo $ip;
  
  echo "<br/>";

  $NAME = $_SERVER["SCRIPT_NAME"];

  echo $NAME;


?>