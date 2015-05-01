<div class="carbon-container">
	<?php if ($this->has_fields()): ?>
		<div class="container-holder container-<?php echo $this->id; ?>" data-json="<?php echo esc_attr( json_encode($this->to_json(false)) ); ?>"></div>
	<?php else:
		_e('No options are available for this widget.', 'crb'); ?>
	<?php endif; ?>
</div>
