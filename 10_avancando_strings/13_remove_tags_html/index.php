<?php

  $textoHtml = "<p>Testando parágrafo.</p><div>uma div</div><p>Outro parágrafo</p>";

  echo $textoHtml;

  $salvarTextoBanco = strip_tags($textoHtml);

  echo $salvarTextoBanco;