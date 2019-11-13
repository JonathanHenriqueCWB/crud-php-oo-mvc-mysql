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

		//Listar clinete do banco de dados
		public function listCliente($table){
			$pdo = parent::get_instance();
			$sql = "SELECT * FROM $table ORDER BY name ASC";
			$statemente = $pdo->query($sql);
			$statemente->execute();

			return $statemente->fetchAll();
		}

	}
 ?>