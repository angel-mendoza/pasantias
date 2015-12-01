<div class="contribuyentes index">
	<h2><?php echo __('Contribuyentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contribuyentes as $contribuyente): ?>
	<tr>
		<td><?php echo h($contribuyente['Contribuyente']['id']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['email']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['created']); ?>&nbsp;</td>
		<td><?php echo h($contribuyente['Contribuyente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contribuyente['Contribuyente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contribuyente['Contribuyente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contribuyente['Contribuyente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contribuyente['Contribuyente']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Contribuyente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
