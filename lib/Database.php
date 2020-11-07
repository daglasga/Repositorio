<?php

class DataBase{
		public $host=DB_HOST;
		public $user=DB_USER;
		public $pass=DB_PASS;
		public $dbname=DB_NAME;

		public $link;
		public $error;

		public function __construct(){
			$this->connectDB();
		}

		private function connectDB(){
			$this->link=new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->link){
				$this->error="Conexionfallida".$this->link->connect_error;
				return false;
			}
		}
		//sleccionar o leer la bse de datos
		public function select($query){
			$result=$this->link->query($query) or die ($this->link->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}else{
				return false;
			}
		}
		//crear datos
		public function register($query){
			$sign_row = $this->link->query($query) or die ($this->link->error.__LINE__);
			if($sign_row){
				header("Location:listaProveedor.php?msg=".urlencode('Datos registrador correctamente!!'));
				exit();
			}else{
				die("Error:(".$this->link->errno.")".$this->link-error);
		}
	}

	// actualizar

	public function updateProveedor($query){

		$update_row = $this->link->query($query) or die ($this->link->error.__LINE__);

		if ($update_row) {
			
			header("Location:listaProveedor.php?msg=".urlencode('Los datos han sido actualizado exitosamente!!!..'));
			exit();
		}else{

			die("Error:(".$this->link->errno.")".$this->link-error);

			}

		}
// eliminar datos

		public function deleteProveedor($query){

			$delete_row = $this->link->query($query) or die ($this->link->error.__LINE__);

			if (delete_row) {
				
				header("Location:listaProveedor.php?msg=".urldecode('Datos eliminados exitosamente!!!...'));
				exit();
			}else{

				die("Error:(".$this->link->errno.")".$this->link-error);
				}
			}


			        public function signIn($query){
            $sign_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if($sign_row){
                header("Location:../listaProveedor.php?msg=".urlencode('<h4>Datos correctos-bienvenido - ADMINISTRADOR!!!</h4>'));
                exit();
            }
            else{
               die("Error:(".$this->link->errno.")".$this->link-error);
            }
        }

        public function signIn2($query){
            $sign_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if($sign_row){
                header("Location:../listaProveedor.php?msg=".urlencode('<h4>Datos correctos-bienvenido - COLABORADOR!!!</h4>'));
                exit();
            }
            else{
               die("Error:(".$this->link->errno.")".$this->link-error);
            }
        }


    }

   



?>