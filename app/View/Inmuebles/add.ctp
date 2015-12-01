<div class="inmuebles form">
<?php echo $this->Form->create('Inmueble'); ?>
	<fieldset>
		<legend><?php echo __('Add Inmueble'); ?></legend>
	<?php
		echo $this->Form->input('ubicacion');
		echo $this->Form->input('numero');
		echo $this->Form->input('sector');
		echo $this->Form->input('areaTerreno');
		echo $this->Form->input('areaContruccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inmuebles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
