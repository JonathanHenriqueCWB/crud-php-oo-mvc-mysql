<?php 
	
	include_once '../model/Conexao.class.php';
	include_once '../model/Manager.class.php';

	$manager = new Manager();
	$id = $_POST['id']; //Recebe o id que vem do formulario (index/deletar)
	
	if(isset($id) && !empty($id)){
		$manager->deleteClient("registros", $id);
		header("Location: ../index.php?Cliente_deletado");
	}

 ?>