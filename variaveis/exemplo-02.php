<?php
  
  $anoNascimento = 1990;

  $nomeCompleto = "Meu Nome Completo";

  // comentário de linha

  /*
    comentário com + de 1 linha
  */

  echo $anoNascimento;
  echo "<br/>";
  //echo $nomeCompleto;
  $nome = $nomeCompleto;

  echo "<br/>";

  //unset($nome); //destroi a variável da memória

  if (isset($nome)) { //verifica se a variável existe
  	echo "$nome";
  }

  echo "<br/>";
  echo "<br/>";

  $nome1 = "Primeiro";
  $nome2 = "Segundo";

  $nomeConcatenado = $nome1 . " " . $nome2; 

  if (isset($nomeConcatenado)) { //verifica se a variável existe
  	echo "$nomeConcatenado";
  } 

?>