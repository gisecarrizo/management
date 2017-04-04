<div class="itemSales form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Item Sale'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Item Sales'), array('action' => 'index'), array('escape' => false)); ?></li>
							    		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('ItemSale', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id_color', array('label' => 'id_color', 'class' => 'form-control', 'placeholder' => 'Id Color'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('id_size', array('label' => 'id_size', 'class' => 'form-control', 'placeholder' => 'Id Size'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cant', array('label' => 'cant', 'class' => 'form-control', 'placeholder' => 'Cant'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount', array('label' => 'amount', 'class' => 'form-control', 'placeholder' => 'Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sale_number', array('label' => 'sale_number', 'class' => 'form-control', 'placeholder' => 'Sale Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('provider_id', array('label' => 'provider_id', 'class' => 'form-control', 'placeholder' => 'Provider Id'));?>
				</div>
            				<div class="form-group">
					<?php echo $this->Form->submit(__('Guardar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

<script type="text/javascript">
    $("#fecha").datepicker({
        format: "dd/mm/yyyy",
        language: "es"
    });
    
    $(".clockpicker").clockpicker({
        autoclose: true
    });
</script>
