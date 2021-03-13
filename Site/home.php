<?php
include_once('head.php');
include_once('menu.php');
?>
<!---->
<div class="content-wrapper">
  <div class="container-fluid">
  <?php 
    // inclui o conteudo Home do documento
    var_dump($url);
    if(file_exists('pages/'.$url[0].'.php')){ 
      echo 'PHP';
      include_once 'pages/'.$url[0].'.php'; 
    } elseif(file_exists('pages/'.$url[0].'.htm')){ 
      echo 'HTM';
      include_once 'pages/'.$url[0].'.htm';
    }elseif(file_exists('pages/'.$url[0].'.html')){ 
      echo 'HTML';
      include_once 'pages/'.$url[0].'.html';
    }else { 
    	echo 'Não encontrou';
      include_once "dashboard.php";
    } 
    include_once('footer.php');
?>