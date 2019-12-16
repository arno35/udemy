<?php
  
  $nome = "Antunes";  // variável global

  function teste() {
  	global $nome;  // pega o valor da variável global
  	echo $nome;
  }
  
  teste();

  echo "<br/>";
  echo "<br/>";
  
  function teste2() { 
    $nome = "Junior";  // variável local	
  	echo $nome." agora no teste2";
  }

  teste2();

  echo "<br/>";

?>