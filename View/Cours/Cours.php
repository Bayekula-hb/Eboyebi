<?php $title = "Cours" ?>

<!-- Menu -->
<?php ob_start(); ?>
<?php require_once("Public/Squellette/MenuCours.php"); ?>
<?php $Menu = ob_get_clean(); ?>

<!-- Le corps -->
<?php ob_start(); ?>
    <div class="container" id="DetailMenu">
        <p> Notre Cours </p>
        </div>
        <div class="CorpsPage">
            <br/>
            <br/>
            <div class="Cours">
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require_once("Public/Annexes/Template.php");?>
<script src="Public/Js/Mon_Js.js"></script>