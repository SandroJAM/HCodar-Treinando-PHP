<!-- Como funcionar a impressão dinâmica  -->

<?php

  include_once "backend.php";

?>

<h2>Seja bem-vindo ao nosso site</h2>
<p><h3><?= $nome; ?> veja as nossas ofertas</h3></p> <!-- É um dado dinâmico -->

<h2>Confira nossos principais produtos:</h2>

<ul>
<?php foreach ($produtos as $produto): ?>
  <li> <h2> <?= $produto; ?> </h2> </li>

<?php endforeach; ?>
</ul>

<!-- Formatar código use Shift + Alt + F -->