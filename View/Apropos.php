<?php $title = "About" ?>

<!-- Menu -->
<?php ob_start(); ?>
<?php require_once("Public/Squellette/Menu.php"); ?>
<?php $Menu = ob_get_clean(); ?>

<!-- Le corps -->
<?php ob_start(); ?>
    <div class="CorpsApropos">
    </div>
<?php $content = ob_get_clean(); ?>
<?php require_once("Public/Annexes/Template.php");?>