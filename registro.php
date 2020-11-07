 <?php
include "lib/config.php";
include "lib/Database.php";
?>

<?php
    $db = new DataBase();
    if(isset($_POST['submit'])){
        $proveedor=mysqli_real_escape_string($db->link, $_POST['proveedor']);
        $telefono=mysqli_real_escape_string($db->link,$_POST['telefono']);
        $direccion=mysqli_real_escape_string($db->link,$_POST['direccion']);
        

        if($proveedor==''||$telefono==''||$direccion==''){
            $error ="Los campos no deben estar vacios!!";
        }else {
            $query="INSERT INTO proveedores (proveedor, telefono, direccion) values('$proveedor','$telefono','$direccion')";
            $create=$db->register($query);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Quispe Ticona Jhonatan Mijail">
	<meta name="keywords" content="Practica Registro Estudiantes">
	<meta name="name" content="pagina de prueba para Practicas">
	<link rel="shorcut icon" href="img/     ">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Document</title>
</head>
<body background="img/fondo2.jpg">
    <section class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <form action="registro.php" method="POST">
                    <?php
                    if(isset($error)){
                        echo "<center><div class='alert alert-danger'> <span>".$error."</span> </div> </center>";
                    }
                    ?>
                    <h2 class="display-5"><center>REGISTRAR PROVEEDOR</center></h2>
                    <div class="form-group">
                        <input type="text" class=form-control placeholder="REGISTRAR PROVEEDOR"name="proveedor" id="proveedor">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class=form-control placeholder="REGISTRAR TELEFONO"name="telefono" id="telefono">
                    </div>

                    <div class="form-group">
                        <input type="text" class=form-control placeholder="REGISTRAR DIRECCION "name="direccion" id="direccion">
                    </div>

                    <div class="form-group">
                        <center>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">REGISTRAR</button>
                            <a href="registro.php" class="btn btn-success">LIMPIAR</a>
                            <a href="listaProveedor.php" class="btn btn-success">VER LISTA</a>
                            <a href="index.php" class="btn btn-success">SALIR DEL SISTEMA</a>
                            
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>
</body>
</html>