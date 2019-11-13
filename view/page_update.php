<?php
	include_once 'dependencias.php';
	include_once '../model/Conexao.class.php';
	include_once '../model/Manager.class.php';

	$maneger = new Manager();
	$id = $_POST['id'];
?>

<h2 class="text-center">Página de atualização
	<i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">
	<div class="container">
		<div class="form-row">

			<?php foreach($maneger->getInfo("registros", $id) as $client_info): ?>

				<div class="col-md-6">
					Nome: <i class="fa fa-user"></i>
					<input class="form-control" type="form-control" type="text" name="name" required="true" autofocus="" value="<?=$client_info['name']?>">
				</div>

				<div class="col-md-6">
					E-mail: <i class="fa fa-envelope"></i>
					<input class="form-control" type="email" name="email" required="true" value="<?=$client_info['email']?>">
				</div>

				<div class="col-md-4">
					CPF: <i class="fa fa-address-card"></i>
					<input class="form-control" type="text" type="text" name="cpf" required="true" id="cpf" value="<?=$client_info['cpf']?>">
				</div>

				<div class="col-md-4">
					Dt. Nascimento: <i class="fa fa-calendar"></i>
					<input class="form-control" type="date" name="birth" required="true" value="<?=$client_info['birth']?>">
				</div>

				<div class="col-md-4">
					Telefone: <i class="fab fa-whatsapp"></i>
					<input class="form-control" type="text" name="phone" required="true" value="<?=$client_info['phone']?>" >
				</div>

				<div class="col-md-12">
					Endereço: <i class="fa fa-map"></i>
					<input class="form-control" type="text" name="address" required="true" id="phone" value="<?=$client_info['address']?>">
				</div>

				<!--Envia id para sobrescrever o registro-->
				<input type="hidden" name="id" value="<?=$client_info['id']?>">

			<?php endforeach; ?>

			<div class="col-md-4">
				<button class="btn btn-warning btn-lg">
					Atualizar Cliente <i class="fa fa-user-edit"></i>
				</button><br><br>

				<a href="../index.php">Voltar</a>
			</div>

		</div>
	</div>	
</form>