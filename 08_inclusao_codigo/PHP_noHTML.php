<?php

    include_once "backend.php";

?>

<h1>Seja Bem Vindo ao Nosso Site</h1>

<p><?= $nome; ?> veja as ofertas</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produtos): ?>
        <li><?= $produtos; ?></li>
    <?php endforeach; ?>

</ul>