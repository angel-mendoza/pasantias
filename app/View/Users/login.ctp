<div class="jumbotron">
	<h1>solicitud de la planilla de uso conforme</h1>
	<p>para poder realizar la solicitud de la planilla de uso conforme primero tiene que estar registrado en la pagina, puede crear su asuario de forma rapida pulsando el boton <b>REGISTRAR NUEVO USUARIO</b>. si ya posee su usuario y contraseña simple mete ingrese al sistema.</p>	
</div>

<div class="row users form">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
	<h2><?php echo __('Ingrese su usuario y contraseña'); ?></h2>
	<form role="form">
	    <div class="form-group">
	      <label for="email"><?php echo $this->Form->input('username');?></label>
	    </div>
	    <div class="form-group">
	      <label for="email"><?php echo $this->Form->input('password');?></label>
	    </div>
	<button type="submit" class="btn btn-primary btn-block">entrar</button>
	</form>
	<br>
	<a href="add" class="btn btn-primary btn-block">Registrar Nuevo Usuario</a>
	
	</div>
	<div class="col-sm-4"></div>
</div>
