<div class="kits index">
	<h2><?php echo __('Kits'); ?></h2>
	<?php echo $this->Form->create('Kit', array('url' => 'index')) ?>
	<fieldset>
		<legend><?php echo __('Search Kits') ?></legend>
		<?php
		echo $this->Form->input('Item.keywords');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')) ?>
	<h2><?php echo __('Kits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pid'); ?></th>
			<th><?php echo $this->Paginator->sort('release_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('is_for_distributors'); ?></th>
			<th><?php echo $this->Paginator->sort('hide_kit_kontent'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($kits as $kit): ?>
	<tr>
		<td><?php echo h($kit['Kit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($kit['Item']['name'], array('action' => 'view', $kit['Kit']['id'])); ?>
		</td>
		<td><?php echo h($kit['Kit']['release_date']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['status']); ?>&nbsp;</td>
		<td><?php if ($kit['Kit']['is_for_distributors']) echo "Yes"; else echo "No" ?>&nbsp;</td>
		<td><?php if ($kit['Kit']['hide_kit_kontent']) echo "Yes"; else echo "No" ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['created']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kit['Kit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kit['Kit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kit['Kit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kit['Kit']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Kit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Init TCPDF File'), array('action' => 'init_tcpdf')) ?></li>
	</ul>
</div>
