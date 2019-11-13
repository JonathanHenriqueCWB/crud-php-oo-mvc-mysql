<?php include_once 'dependencias.php' ?>

<h2 class="text-center">Página de registro
	<i class="fa fa-user-plus"></i>
</h2><hr>

<form method="POST" action="../controller/insert_client.php">
	<div class="container">
		<div class="form-row">
			
			<div class="col-md-6">
				Nome: <i class="fa fa-user"></i>
				<input type="form-control" type="text" name="name" required="true" autofocus="">
			</div>

			<div class="col-md-6">
				E-mail: <i class="fa fa-envelope"></i>
				<input type="form-control" type="email" name="email" required="true" >
			</div>

			<div class="col-md-4">
				CPF: <i class="fa fa-address-card"></i>
				<input type="form-control" type="text" name="cpf" required="true" >
			</div>

			<div class="col-md-4">
				Dt. Nascimento: <i class="fa fa-calendar"></i>
				<input type="form-control" type="date" name="birth" required="true" >
			</div>

			<div class="col-md-4">
				Telefone: <i class="fab fa-whatsapp"></i>
				<input type="form-control" type="text" name="phone" required="true" >
			</div>

			<div class="col-md-12">
				Endereço: <i class="fa fa-map"></i>
				<input type="form-control" type="text" name="address" required="true" >
			</div>

			<div class="col-md-4">
				<button class="btn btn-primary btn-lg">
					Entre com cliente <i class="fa fa-user-plus"></i>
				</button><br><br>

				<a href="../index.php">Voltar</a>
			</div>

		</div>
	</div>	
</form>