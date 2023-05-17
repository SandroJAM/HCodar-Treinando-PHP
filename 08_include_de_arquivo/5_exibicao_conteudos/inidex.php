<?php

 // Ótima estratégia para resumir as chamadas PHP apenas para exibição de valores

 $nome = "Sandro Muniz";

?>

<!-- Comentáriono HTML-->
<!-- Qual é a estratégia? Inserir um valor no input! -->

<?= $teste = "Barbara Muniz"; ?>  <!-- Não utiliza para lógica PHP -->

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>