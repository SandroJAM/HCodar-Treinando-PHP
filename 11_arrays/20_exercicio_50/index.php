<?php

 $pessoas = [
    'Sandro' => 56,
    'Barbara' => 47,
    'Enzo' => 6
 ];

 print_r($pessoas);

?>

<table border='1'>
    <tr>
      <th>Nome</th>  
      <th>Idade</th>  
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
      <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
      </tr>
    <?php endforeach; ?>
</table>