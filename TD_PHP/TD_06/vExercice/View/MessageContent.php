<?php $title = "Valves-Contenu du message"; ?>

<?php ob_start(); ?>

<h1> Contenu du message </h1>

<p>
    <?= $contMessage ?>
</p>

<?php $content = ob_get_clean(); ?>

<?php require "Template.php"; ?>