<?php $title = "Index" ?>

<!-- Menu -->
<?php ob_start(); ?>
<?php require_once("Public/Squellette/Menu.php"); ?>
<?php $Menu = ob_get_clean(); ?>

<!-- Le corps -->
<?php ob_start(); ?>
  <!-- <div class="carousel slide" data-ride="carousel"> -->
  <!-- <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="Public/Image/img0.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Public/Image/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Public/Image/img3.jpg" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="Public/Image/img4.jpg" class="d-block w-100" alt="...">
    </div>
  </div> -->
<?php $content = ob_get_clean(); ?>
<?php require_once("Public/Annexes/Template.php");?>