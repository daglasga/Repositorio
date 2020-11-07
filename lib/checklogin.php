<?php
    include "../lib/config.php";
    include "../lib/Database.php";
?>

<?php               
    $db = new DataBase();
     if(isset($_POST['submit'])){
        $user = mysqli_real_escape_string($db->link, $_POST['user']);
        $pass = mysqli_real_escape_string($db->link, $_POST['pass']);
        
        if(empty($user) || empty($pass)){
            header('Location:../index.php?msg='.urlencode("Debe llenar +++ los campos"));
        }else {
            $query = "SELECT * FROM login WHERE user = '$user'";
            $result = $db->select($query);
            if (mysqli_num_rows($result)){

                while($row = mysqli_fetch_array($result)){
                    if($row['password'] == $pass){
                        if($row['id_rol'] == 1){
                        $login = $db->signIn($query);
                        }else{
                        $login = $db->signIn2($query);
                        }
                    }
                    else{
                        // header("Location:../index.php?error=si");
                        header('Location:../index.php?msg='.urlencode("error: no estas registrado"));
                    }
                }
            }else{  
                // header("Location:../index.php?error=si");
                header('Location:../index.php?msg='.urlencode("ERROR: no estas registrado"));
            }
        }    
    }    

?>
