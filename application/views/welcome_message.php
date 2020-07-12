<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,miximum-scale=1.0, minimum-scale=1.0">
        <title>Principal</title>

        <!--    <link rel="shortcut icon" href="favicon.ico" type="image/ico">-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <link type="text/css" rel="stylesheet" href="assets/css/estilos.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>"/>

    </head>

    <body>

        <header class="encabezado">
            <h1 class="container-fluid" >Sitema de citas medicas</h1>
            <img src="assets/images/logo.jpg" alt="Hexagono celeste con estetoscopio">

        </header>

        <section class="container"> 

            <a href="<?= site_url('CrearCuenta_controller') ?>"><button class="btn btn-primary">Crear Cuenta</button></a>
            <a href="<?= site_url('Appointment_controller') ?>"><button class="btn btn-primary">Crear cita cita registro</button></a>
            <a href="<?= site_url('IniciarSesion_controller') ?>"><button class="btn btn-primary">Inciar Sesion</button></a>
            
             
            

        </section> 

        <!-- Footer -->
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Fila -->
                <div class="row">

                    <!-- Columna -->
                    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Content -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Citas en linea</h5>
                        <p>Somos una empresa que se preocupa por su salud</p>


                    </div>
                    <!-- Columna -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Sobre nosotros</h5>

                        <ul class="list-unstyled">

                            <li>
                                <p>
                                    <a href="<?= site_url('ContactUs_controller') ?>">Contactenos</a>
                                </p>
                            </li>

                        </ul>

                    </div>
                    <!-- Columna -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Contact details -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Direccion</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <i class="fas fa-home mr-3"></i> Atenas, AL 10012, CR</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i> doctor@example.com</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> + 506 234 567 88</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-print mr-3"></i> + 506 234 567 89</p>
                            </li>
                        </ul>

                    </div>
                    <!-- Columna -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <ul class="col-md-2 col-lg-2 text-center mx-auto my-4">

                        <!-- Redes sociales -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Redes sosiales</h5>

                        <li>
                            <!-- Facebook -->
                            <a type="button">
                                <img src="assets/images/facebook.png" class="redeSocial "alt="facebook"/>

                            </a>
                        </li>

                        <!-- Instagram -->
                        <li>
                            <a type="button" class="instagram">

                                <img src="assets/images/instagram.png" class="redeSocial "alt="instagram"/>
                            </a>

                        </li>
                    </ul>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> DamianDeveloper.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

    </body>
</html>
