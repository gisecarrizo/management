<div class="clients form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Client'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Client.dni')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('Client.dni'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Clients'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Client', array('role' => 'form')); ?>


										<div class="form-group">
					<?php echo $this->Form->input('dni', array('label' => 'dni','type'=>'numeric','readonly'=>true ,'class' => 'form-control', 'placeholder' => 'Dni'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('label' => 'name', 'class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lastname', array('label' => 'lastname', 'class' => 'form-control', 'placeholder' => 'Lastname'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('label' => 'address', 'class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('label' => 'phone', 'class' => 'form-control', 'placeholder' => 'Phone'));?>
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
