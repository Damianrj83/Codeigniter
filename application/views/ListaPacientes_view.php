<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,miximum-scale=1.0, minimum-scale=1.0">
    <title>Inciar Sesion</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>"/>

  </head>
  
  <header>
     
  </header>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="<?=site_url('')?>">Pagina Principal</a> 
      
</nav>
  <body>
      <section class="container">
          
          <table class="table">
            <thead class="table table-striped table-dark">
                <tr>
                  
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Sintomas</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <td scope="row"><?php echo $row->id; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->correoElectronico; ?></td>
                <td><?php echo $row->direccion; ?></td>
                <td><?php echo $row->telefono; ?></td>
                <td><?php echo $row->sintomas; ?></td>
                <td> <a href="<?=site_url('ListaPacientes_controller/editar')?>/<?php echo $row->id;?>">Editar</a>
                    
                <a href="<?=site_url('ListaPacientes_controller/eliminar')?>/<?php echo $row->id;?>">Eliminar</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>
      </section>
     
  </body>
  
</html>
