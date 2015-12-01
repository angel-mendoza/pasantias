<div class="empresas view">
<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumeroCatastral'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['numeroCatastral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RazonSocial'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['razonSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rif'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['rif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ramo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['ramo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaSolicitud'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['fechaSolicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['User']['id'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contribuyente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Contribuyente']['id'], array('controller' => 'contribuyentes', 'action' => 'view', $empresa['Contribuyente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inmueble'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Inmueble']['id'], array('controller' => 'inmuebles', 'action' => 'view', $empresa['Inmueble']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresa['Empresa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contribuyentes'), array('controller' => 'contribuyentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribuyente'), array('controller' => 'contribuyentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inmuebles'), array('controller' => 'inmuebles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inmueble'), array('controller' => 'inmuebles', 'action' => 'add')); ?> </li>
	</ul>
</div>
