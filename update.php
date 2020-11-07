<?php
include "lib/config.php";
include "lib/Database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Registro para actualizar Proveedor</title>
</head>
<body>
<section class="container my-5">
    <?php
        $cod=$_GET['cod_proveedor'];
        $db= new Database();
        $query = "SELECT * FROM proveedores WHERE cod_proveedor=$cod";
        $getData = $db->select($query)->fetch_assoc();

        if(isset($_POST['submit'])){
      
            $proveedor= mysqli_real_escape_string($db->link, $_POST['proveedor']);
            $telefono= mysqli_real_escape_string($db->link, $_POST['telefono']);
            $direccion= mysqli_real_escape_string($db->link, $_POST['direccion']);

         if($proveedor=='' || $telefono== ''|| $direccion==''){
                $error = " los campos no deben estar vacios !!!!!!!";
            }else{

    
                /* PARA ACTUALIZAR LOS DATOS DE LA TABLA CATEGORIA */
                $query = "UPDATE proveedores SET proveedor='$proveedor',
                                                 telefono = '$telefono',
                                                 direccion = '$direccion' 
                                                WHERE cod_proveedor = '$cod'"; 
                $update = $db->updateProveedor($query);
                
            }
        }

      /*   PARA ELIMINAR LOS DATOS */

      if(isset($_POST['delete'])){
        $query = "DELETE FROM proveedores WHERE cod_proveedor=$cod";
        $deleteData = $db->deleteProveedor($query);
      }
    ?>
    <div class="col-sm-12">
        <form action="update.php?cod_proveedor=<?php echo $cod;?>" method="POST">
            <?php
                if (isset($error)) {
                    echo " <center><div class='alert alert-danger'><span>".$error."</span></div></center>"; 
                }
            ?>
            <h2 class="display-5 text-danger"><center>Actualizar Proveedor</center></h2>
           

            <div class="form-group">
                 
                  <input type="text" name="proveedor" id="proveedor" class="form-control" placeholder="Registrar Proveedor" value="<?php echo $getData['proveedor']?>">
           </div>

            <div class="form-group">
                 
                  <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Registrar Telefono" value="<?php echo $getData['telefono']?>">
           </div>

            <div class="form-group">
                 
                  <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Registrar Direccion" value="<?php echo $getData['direccion']?>">
           </div>
                <div class="form-group">
                  <center>
                        <button type="submit" name="submit" id="submit"  class="btn btn-primary">Guardar</button>
                        <button type="submit" name="delete" id="delete"  class="btn btn-danger">Eliminar</button>
                        <a href="listaProveedor.php" class="btn btn-info">Cancelar</a>
                  </center>
                </div>
        </form>
    </div>

</section>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>
</body>
</html>