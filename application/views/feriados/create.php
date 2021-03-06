<?= form_open('feriados/insert', array('class'=>'form-horizontal')); ?>
	<legend>Agregando un Día Feriado</legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="row">
		<div class="form-group">
			<?= form_label('Descripción: ', 'descripcion', array('class'=>'col-md-3 control-label')); ?>
			<div class="col-md-4">
				<?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'descripcion', 'id'=>'descripcion','data-toggle'=>'popover','data-trigger'=>'focus','title'=>'Ejemplo de descripción:','data-content'=>'Día de la Revolución de Mayo','value'=>set_value('descripcion'))); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<?= form_label('Fecha: ', 'fecha', array('class'=>'col-md-3 control-label')); ?>
			<div class="col-md-4">
				<?= form_input(array('class'=>'form-control fecha','type'=>'text', 'name'=>'fecha', 'id'=>'fecha','value'=>set_value('fecha'))); ?>
			</div>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="form-group">
			<div class="col-md-offset-3">
				<div class="col-md-6">
					<?= form_button(array('type'=>'submit', 'content'=>' Aceptar', 'class'=>'btn btn-success glyphicon glyphicon-ok')); ?>

					<?= anchor('feriados/index', ' Cancelar',array('class'=>'btn btn-default glyphicon glyphicon-remove')); ?>
				</div>
			</div>
		</div>	
	</div>

<?= form_close(); ?>

<script type="text/javascript">
	base_url = '<?=base_url(); ?>';
	$('#descripcion').popover();
</script>
<script src="<?= base_url('js/feriados.js'); ?>"></script>