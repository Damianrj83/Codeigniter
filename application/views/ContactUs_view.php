<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,miximum-scale=1.0, minimum-scale=1.0">
    <title>Principal</title>


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
            <h5 class="card-title text-center">Contact Us</h5>
            <form class="form-signin" method="post" action="<?=site_url('CrearCitaSinRegistro_controller/crearCita')?>">
                 <div class="form-label-group">
                   
                    <label for="inputName">Full Name</label>
                <input type="name" name="name" class="form-control" placeholder="Full name" required>
               
              </div>
                
                <div class="form-label-group">
                  
                        
                <label for="inputEmail">E-mail Address</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail Address" required autofocus>
                
              </div>

          
              
              <div class="form-label-group">
                 <label for="message">Message</label>
                 <textarea  type="text" name="message" class="form-control" placeholder="Write here..." required></textarea> 
               
              </div>
               
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
             <a href="<?=site_url('')?>"><button class="btn btn-primary">Cancelar</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

     
       
    </body>
</html>
