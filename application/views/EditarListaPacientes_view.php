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
            <h5 class="card-title text-center">Editar</h5>
            <form class="form-signin" method="post" action="<?=site_url('ListaPacientes_controller/actualizar')?>/<?php echo $row->id; ?>">
              <div class="form-label-group">
                  
                       
               <div class="form-label-group">
                    <label for="inputName">Nombre</label>
                <input type="name" name="nombre" class="form-control" value="<?php echo $row->nombre; ?>" placeholder="nombre" required>
               
              </div>
                <label for="inputEmail">Correo electronico</label>
                <input type="email" name="correoElectronico" class="form-control" value="<?php echo $row->correoElectronico; ?>" placeholder="Correo electronico" required autofocus>
                
                 <div class="form-label-group">
                    <label for="direccion">Direccion</label>
                <input name="direccion" class="form-control" value="<?php echo $row->direccion; ?>" placeholder="direccion" required>
               
              </div>
                
                <div class="form-label-group">
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" class="form-control" value="<?php echo $row->telefono; ?>" placeholder="telefono" required>
               
              </div>
              
               <div class="form-label-group">
                    <label for="sintomas">Sintomas</label>
                    <textarea name="sintomas" class="form-control" value="<?php echo $row->sintomas; ?>" placeholder="sintomas" required></textarea> 
               
              </div>
                
              </div>

 
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Guardar</button>
              
              
              
              <hr class="my-4">     
              <input class="form__boton" type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
            </form>
            <!--<a href="<?=site_url('')?>"><button class="btn btn-primary">Cancelar</button></a>-->
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
  
</html>
