<div class="kits form">
<?php echo $this->Form->create('Kit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Kit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Item.name');
		echo $this->Form->input('Item.description');
		echo $this->Form->input('Item.weight', array('required' => false));
		echo $this->Form->input('Item.measurement_unit_id', array('label' => 'Measurement Unit', 'options' => $measurement_units));
		echo $this->Form->input('Item.item_type_id', array('label' => 'Item Type', 'options' => $item_types, 'hiddenField' => true));
		echo $this->Form->input('status', array('options' => $status));
		echo $this->Form->input('hts_number');
		echo $this->Form->input('tax_group');
		echo $this->Form->input('eccn');
		echo $this->Form->input('release_date');
		echo $this->Form->input('is_for_distributors');
		echo $this->Form->input('hide_kit_kontent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kit.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Kit.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Kits'), array('action' => 'index')); ?></li>
	</ul>
</div>
