<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,miximum-scale=1.0, minimum-scale=1.0">
    <title>Principal</title>

<!--    <link rel="shortcut icon" href="favicon.ico" type="image/ico">-->

<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
<!--<link type="text/css" rel="stylesheet" href="assets/css/estilos.css" />-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>"/>

  </head>
  
  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=site_url('')?>">Pagina Principal</a>  
    </div>
    <ul class="nav navbar-nav">
        
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Citas <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Listas cita</a></li>
          <li><a href="#">Activar notificacion</a></li>
        
        </ul>
      
      
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tu cuenta <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Datos Personales</a></li>
          <li><a href="#">Cambiar contrasena</a></li>
        </ul>
           
       <li><a href="#">Tu cuenta</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hola<br> </a></li>g
      <li><a href="<?=site_url('')?>"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>
      
    </ul>
  
  </div>
</nav>
  </body>
  
</html>
