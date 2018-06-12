<?php
 include("../../modelo/cabecera.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Facturacion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--quitar los spinner de los input number-->
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
        }

        input[type=number] { -moz-appearance:textfield; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#nit').on('keypress',function(e){
                if(e.key=='Enter')
                {
                    alert('presionaste enter');
                }
            });
        });
    </script>
  </head>
  <body>
  <?php 
      include('../../modelo/navbar.php'); 
    ?>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-6" style="margin-right:-50px;">
            <!--formulario-->
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" style="margin-left:130px;">Nit/CI:</label>
                    <div class="col-sm-5" style="margin-left:-40px;">
                        <input type="number" class="form-control" id="nit" placeholder="Nit/CI" required>
                        <!--poner efecto onkey con enter para buscar el nit-->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" style="margin-left:130px;">Nombre:</label>
                    <div class="col-sm-5" style="margin-left:-40px;">
                        <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
            </form>
            <!--button group-->
            <div class="row" style="margin-top:50px;">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="btn-group btn-group-lg" role="group">
                        <button type="button" class="btn btn-primary">Pizza</button>
                        <button type="button" class="btn btn-primary">Alitas</button>
                        <button type="button" class="btn btn-primary">Refrescos</button>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
            <!--button de productos-->
            <div class="row" style="margin-top:50px;overflow-y:scroll;height:360px;width:580px;margin-right:70px;">
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                <div class="col-md-12" style="margin-left:20px;margin-top:10px;">
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                    <button class="btn btn-primary text-center" style="width:100px;height:100px;">carnivora</button>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            <!--tabla-->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio Por Unidad</th>
                            <th scope="col">Total</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">Producto</td>
                            <td scope="col">Cantidad</td>
                            <td scope="col">Precio</td>
                            <td scope="col">Total</td>
                            <td scope="col">Borrar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--opciones-->
            <form style="margin-top:50px">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Monto</label>
                    <div class="col-sm-5" style="margin-left:-40px;">
                        <input type="number" class="form-control" id="nit" placeholder="Monto" required>
                        <!--poner efecto onkey con enter para mostrar cambio-->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cambio:</label>
                    <div class="col-sm-5" style="margin-left:-40px;">
                        <input type="text" class="form-control" placeholder="Cambio" disabled>
                    </div>
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-primary text-center" style="margin-left:110px;width:150px;">Imprimir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>