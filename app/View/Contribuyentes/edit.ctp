<div class="contribuyentes form">
<?php echo $this->Form->create('Contribuyente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contribuyente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('cedula');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contribuyente.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Contribuyente.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Contribuyentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
