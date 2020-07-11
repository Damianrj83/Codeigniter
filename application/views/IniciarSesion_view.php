<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,miximum-scale=1.0, minimum-scale=1.0">
    <title>Inciar Sesion</title>

<!--    <link rel="shortcut icon" href="favicon.ico" type="image/ico">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  
  
<!--<link type="text/css" rel="stylesheet" href="assets/css/estilos.css" />-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>"/>

  </head>
  
  <body>
     <section class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar sesion</h5>
            <form class="form-signin" method="post" action="<?=site_url('IniciarSesion_controller/process')?>">
              <div class="form-label-group">
                  
                       
            
                <label for="inputEmail">Correo electronico</label>
                <input type="email" name="correoElectronico" class="form-control" placeholder="Correo electronico" required autofocus>
                
              </div>

              <div class="form-label-group">
                 <label for="inputPassword">Contrasena</label>
                <input type="password" name="contrasena" class="form-control" placeholder="contrasena" required>
               
              </div>
         

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar sesion</button>
              <hr class="my-4">
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
  
</html>
