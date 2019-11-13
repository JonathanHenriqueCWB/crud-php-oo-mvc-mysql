<?php 
	class Manager extends Conexao{

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

	}
 ?>