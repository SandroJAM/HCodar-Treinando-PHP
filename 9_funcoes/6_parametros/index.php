<?php

  function passaParam($vel) { // Se exigir o argumento, tem que passar o mesmo

    echo "O carro atinge a velocidade máxima de $vel km/h <br>";

  }

  passaParam(200);
  passaParam(300);
  passaParam(400);
  passaParam(500);

  // Não pode, sem parâmetro dá erro
  // passaParam();

  echo "<br>"; echo "Teste continuando ..."; echo "<br>";

  $PassarValor = 160;

  echo "<br>";

  passaParam($PassarValor);

  // Se passar parâmetros a mais, o PHP ignora
  passaParam(375, "teste");

  // Se passar um valor não correpondente, o PHP também ignora
  // Para evitar, deve-se fazer o tratamento de dados na função
  passaParam("teste");

  function checarParam($chp) { // Se exigir o argumento, tem que passar o mesmo

    if(is_int($chp)) {
        echo "O carro atinge a velocidade máxima de $chp km/h <br>";
    } else {
        echo "Por favor passe um número interio <br>";
    }
  }

  checarParam("teste");

  // Passando vários parâmetros

  function variosParam($nome, $sexo) {

    echo "O $nome é do sexo $sexo"; echo "<br>";

  }

  variosParam("Sandro Muniz", "Masculino");
  variosParam("Barbara Muniz", "Femenino");
  variosParam("Enzo Barbosa", "Masculino");