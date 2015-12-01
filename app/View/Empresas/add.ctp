<div class="empresas form">
<?php echo $this->Form->create('Empresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Empresa'); ?></legend>
	<?php
		echo $this->Form->input('numeroCatastral');
		echo $this->Form->input('razonSocial');
		echo $this->Form->input('rif');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('ramo');
		echo $this->Form->input('fechaSolicitud');
		echo $this->Form->input('user_id');
		echo $this->Form->input('contribuyente_id');
		echo $this->Form->input('inmueble_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contribuyentes'), array('controller' => 'contribuyentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribuyente'), array('controller' => 'contribuyentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inmuebles'), array('controller' => 'inmuebles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inmueble'), array('controller' => 'inmuebles', 'action' => 'add')); ?> </li>
	</ul>
</div>
