<?php
include "lib/config.php";
include "lib/DataBase.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Quicaña Quenta Douglas ">
	<meta name="keywords" content="Practica Registro Estudiantes">
	<meta name="name" content="pagina de prueba para Practicas">
	<link rel="shorcut icon" href="img/     ">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
	<title>Document</title>
</head>
<body class="fondo">



    <section class="container my-5">
        <div class="col-sm-12">
        <?php
        $db=new Database();
        $query="SELECT * FROM proveedores";
        $read=$db->select($query);

        if(isset($_GET['msg'])){
            echo "<div class='alert-success'><span>".$_GET['msg']."</span></div>";
        }
        ?>
        </div>





        <div class="col-sm-12" >
            <table class="table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID_UNICO</th>
                    <th scope="col">PROVEEDOR</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
                <?php if($read){?>
                <?php
                $i=1;
                while($row=$read->fetch_assoc()){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['cod_proveedor']; ?></td>
                            <td><?php echo $row['proveedor'];    ?></td>
                            <td><?php echo $row['telefono'];  ?></td>
                            <td><?php echo $row['direccion'];?></td>
                            <td><?php echo $row['fecha_creacion']; ?></td>
                            <td><a href="update.php?cod_proveedor= <?php echo urlencode($row['cod_proveedor']); ?>" class="btn btn-primary btn-sm">EDITAR</a></td>
                        </tr>
                    </tbody>
                <?php }
                ?>
                <?php } else {?>
                <p>los datos no son validos...</p>
                <?php } ?>
            </table>
            <div class="form-group">
                    <label class="label label-primary">
                        <span><a href="registro.php" class="btn btn-info">IR A PRINCIPAL</a></span>
                        <span><a href="index.php" class="btn btn-warning">SALIR DEL SISTEMA</a></span>
                       
                    </label>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>
</body>
</html>