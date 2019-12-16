<?php
  
  // tipos básicos
  $nome = "Nome";
  $site = 'www.nome.com';

  $ano = 2019;
  $salario = 1015.65;
  $bloqueado = false;

  ////////////////////////////////

  // tipos compostos
  $frutas =  array("abacaxi", "laranja", "manga");

  echo $frutas[2];

  $nascimento = new dateTime();

  echo "<br/>";

  //var_dump($nascimento); 

  ////////////////////////////////

  // tipos especiais
  $arquivo = fopen("exemplo-03.php", "r");

  //var_dump($arquivo);

  $nulo = null; // variável nula, ela não existe na memória


?>