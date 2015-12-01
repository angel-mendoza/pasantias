<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($user['User']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas'); ?></h3>
	<?php if (!empty($user['Empresa'])): ?>
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
	<?php foreach ($user['Empresa'] as $empresa): ?>
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
