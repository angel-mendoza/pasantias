<div class="inmuebles view">
<h2><?php echo __('Inmueble'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['sector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AreaTerreno'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['areaTerreno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AreaContruccion'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['areaContruccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($inmueble['Inmueble']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inmueble'), array('action' => 'edit', $inmueble['Inmueble']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inmueble'), array('action' => 'delete', $inmueble['Inmueble']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inmueble['Inmueble']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Inmuebles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inmueble'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas'); ?></h3>
	<?php if (!empty($inmueble['Empresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NumeroCatastral'); ?></th>
		<th><?php echo __('RazonSocial'); ?></th>
		<th><?php echo __('Rif'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Ramo'); ?></th>
		<th><?php echo __('FechaSolicitud'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Contribuyente Id'); ?></th>
		<th><?php echo __('Inmueble Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inmueble['Empresa'] as $empresa): ?>
		<tr>
			<td><?php echo $empresa['id']; ?></td>
			<td><?php echo $empresa['numeroCatastral']; ?></td>
			<td><?php echo $empresa['razonSocial']; ?></td>
			<td><?php echo $empresa['rif']; ?></td>
			<td><?php echo $empresa['telefono']; ?></td>
			<td><?php echo $empresa['email']; ?></td>
			<td><?php echo $empresa['ramo']; ?></td>
			<td><?php echo $empresa['fechaSolicitud']; ?></td>
			<td><?php echo $empresa['created']; ?></td>
			<td><?php echo $empresa['modified']; ?></td>
			<td><?php echo $empresa['user_id']; ?></td>
			<td><?php echo $empresa['contribuyente_id']; ?></td>
			<td><?php echo $empresa['inmueble_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas', 'action' => 'view', $empresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas', 'action' => 'edit', $empresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas', 'action' => 'delete', $empresa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
