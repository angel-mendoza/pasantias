<div class="empresas index">
	<h2><?php echo __('Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numeroCatastral'); ?></th>
			<th><?php echo $this->Paginator->sort('razonSocial'); ?></th>
			<th><?php echo $this->Paginator->sort('rif'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('ramo'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaSolicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('contribuyente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inmueble_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['id']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['numeroCatastral']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['razonSocial']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['rif']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['email']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['ramo']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['fechaSolicitud']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['created']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresa['User']['id'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empresa['Contribuyente']['id'], array('controller' => 'contribuyentes', 'action' => 'view', $empresa['Contribuyente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empresa['Inmueble']['id'], array('controller' => 'inmuebles', 'action' => 'view', $empresa['Inmueble']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresa['Empresa']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contribuyentes'), array('controller' => 'contribuyentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribuyente'), array('controller' => 'contribuyentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inmuebles'), array('controller' => 'inmuebles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inmueble'), array('controller' => 'inmuebles', 'action' => 'add')); ?> </li>
	</ul>
</div>
