<?php 
	class Manager extends Conexao{

		//Cadastro de cliente no banco de dados
		public function insertClient($table, $data){

			$pdo = parent::get_instance();
			//Campos
			$fields = implode(", ", array_keys($data));
			//valores
			$values = ":" . implode(", :" , array_keys($data));
			//sql
			$sql = "INSERT INTO $table ($fields) VALUES ($values)";
			$statemente = $pdo->prepare($sql);

			foreach ($data as $key => $value) {
				$statemente->bindValue(":$key" , $value, PDO::PARAM_STR);
			}

			$statemente->execute();
		}

		//Listar cliente do banco de dados
		public function listClient($table){
			$pdo = parent::get_instance();
			$sql = "SELECT * FROM $table ORDER BY name ASC";
			$statemente = $pdo->query($sql);
			$statemente->execute();

			return $statemente->fetchAll();
		}

		//Escluir cliente do banco de dados
		public function deleteClient($table, $id){
			$pdo = parent::get_instance();
			$sql = "DELETE FROM $table WHERE id = :id";
			$statemente = $pdo -> prepare($sql);
			$statemente->bindValue(":id" , $id);
			$statemente-> execute();
		}

		public function getInfo($table, $id){
			$pdo = parent::get_instance();
			$sql = "SELECT * FROM  $table WHERE id = :id";
			$statemente = $pdo->prepare($sql);
			$statemente->bindValue(":id", $id);
			$statemente->execute();

			return $statemente->fetchAll();

		}

		public function updateClient($table, $data, $id){
			$pdo = parent::get_instance();
			//Váriavel novos vlaores ira levar os novos valores ao banco de dados
			$new_values= "";
			
			$sql = "";
			foreach ($data as $key => $value) {
				$new_values .= "$key=:$key, "; 
			}
			$new_values = substr($new_values, 0, -2);

			$sql = "UPDATE $table SET $new_values WHERE id = :id";
			$statemente = $pdo->prepare($sql);
			
			foreach($data as $key  => $value){
				$statemente->bindValue(":$key", $value, PDO::PARAM_STR);
			}

			$statemente->execute();
		}


	}
 ?>