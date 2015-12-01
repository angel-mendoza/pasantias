<div class="inmuebles index">
	<h2><?php echo __('Inmuebles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('sector'); ?></th>
			<th><?php echo $this->Paginator->sort('areaTerreno'); ?></th>
			<th><?php echo $this->Paginator->sort('areaContruccion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inmuebles as $inmueble): ?>
	<tr>
		<td><?php echo h($inmueble['Inmueble']['id']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['ubicacion']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['numero']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['sector']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['areaTerreno']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['areaContruccion']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['created']); ?>&nbsp;</td>
		<td><?php echo h($inmueble['Inmueble']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inmueble['Inmueble']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inmueble['Inmueble']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inmueble['Inmueble']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inmueble['Inmueble']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Inmueble'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
