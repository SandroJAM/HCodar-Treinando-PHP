<?php

  $ranking = [
    'Barbara' => 450,
    'Isis' => 250,
    'Junior' => 10,
    'Ane' => 60,
    'Sandro' => 1,
    'Enzo' => 500
  ];

  asort($ranking);
?>

<h1>Ranking</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>