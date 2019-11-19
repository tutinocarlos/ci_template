<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Alta Usuarios</h5>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="remove"></a>
			</div>
		</div>
	</div>

	<div class="card-body">
		<form action="<?= base_url('Manager/usuarios/agregar')?>" autocomplete="off" method="post">

			<div class="row">

				<div class="form-group col-sm-3 ">
					<label>Nombre:</label>
					<input name="nombre" type="text" class="form-control" placeholder="" value="<?= set_value('nombre')?>">
					<?php echo form_error('nombre', '<div class="text-danger">', '</div>'); ?>
				</div>
				<div class="form-group col-sm-3 ">
					<label>Apellido:</label>
					<input name="apellido" type="text" class="form-control" placeholder="" value="<?= set_value('apellido')?>">
					<?php echo form_error('apellido', '<div class="text-danger">', '</div>'); ?>
				</div>
				<div class="form-group col-sm-3 ">
					<label>Email:</label>
					<input name="email" type="email" class="form-control" placeholder="" value="<?= set_value('email')?>">
					<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
				</div>
				<div class="form-group col-sm-3 ">
					<label>Usuario:</label>
					<input name="username" type="text" class="form-control" placeholder="" value="<?= set_value('username')?>">
					<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>
			<div class="row">


				<div class="form-group col-sm-3 ">
					<label>Password:</label>
					<input name="password" type="password" class="form-control" placeholder="" value="<?= set_value('password')?>">
					<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
				</div>
				
				<div class="form-group col-sm-3 ">
					<label>Confirmar Password:</label>
					<input name="re-password" type="password" class="form-control" placeholder="" value="<?= set_value('re-password')?>">
					<?php echo form_error('re-password', '<div class="text-danger">', '</div>'); ?>
				</div>
				
			</div>

			<div class="text-right">
				<button type="submit" class="btn btn-primary">Enviar datos<i class="icon-paperplane ml-2"></i></button>
			</div>
		</form>
	</div>
</div>
