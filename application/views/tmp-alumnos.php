<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comedor</title>
    <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('css/estilos-alumnos.css'); ?>" rel="stylesheet" />

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="<?= base_url('js/jquery.js'); ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
	
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	          	<a class="navbar-brand" href="#">ComedorUNSa</a>
	          	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	          	</button>
	          	
	        </div>

	        <div class="navbar-collapse collapse" id="navbar-main">
	          	<ul class="nav navbar-nav">
	          		<?= my_menu_principal(); ?>
	          	</ul>
	          	<ul class="nav navbar-nav navbar-right">
	          		<?= my_menu_principal_derecha(); ?>
	          	</ul>
	        </div>
	    </div>
	</div>

	<div id="contenedor">		
		<div class="row">
			<!-- Información del alumno -->	
			<div id="col1" class="col-md-4">
				<div id="info-perfil">					
					<div id="img_alumno">
						<a href="#" class="thumbnail">
							<?= form_open_multipart('usuarios/subir_foto', array('id'=>'form-foto')); ?>
				      			<input type="file" name="userfile" style="visibility:hidden;position:absolute;top:0;"/>
				      		<?= form_close(); ?>
				      		<img class="img-subir" data-src="holder.js/100%x180" src="<?= $registro->ruta_foto; ?>">
						</a>
					</div>
					<div id="datos_alumno">
						<div class="form-group group-label">
							<label class="label-titulo">Nombre: </label>
							<label class="mostrar-info"><?= $registro->nombre; ?></label>
						</div>

						<div class="form-group group-label">
							<label class="label-titulo">DNI: </label>
							<label class="mostrar-info"><?= $registro->dni; ?></label>
						</div>

						<div class="form-group group-label">
							<label class="label-titulo">Facultad: </label>
							<label class="mostrar-info"><?= $registro->facultad_nombre; ?></label>
						</div>

						<div class="form-group group-label">
							<label class="label-titulo">Provincia: </label>
							<label class="mostrar-info"><?= $registro->provincia_nombre; ?></label>
						</div>

						<div class="form-group group-label">
							<label class="label-titulo">Categoría: </label>
							<label class="mostrar-info"><?= $registro->categoria_nombre; ?></label>
						</div>

						<div class="form-group group-label">
							<label class="label-titulo">Saldo: </label>
							<label class="mostrar-info"><?= '$ '.$registro->saldo; ?></label>
						</div>								
					</div>
				</div>	
			</div>
			<div id="col2" class="col-md-4">
				<div id="info_comedor">
					<div id="mis_tickets">
						<legend>Mis Tickets</legend>
						<div class="row">
							<div class="form-group">
								<label for="estado" class="col-md-2">Estado: </label>
								<div class="col-md-10">
									<?= form_dropdown('estado', $estados, 5,"id='drop_down' class='form-control'"); ?>
								</div>
							</div>
						</div>
						<br>
						<div class="tablas-mis-tickets">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th> Número </th>
										<th> Fecha </th>
										<th> Estado </th>
									</tr>
								</thead>

								<tbody id="destino_resultado">
									<?php foreach ($tickets as $ticket): ?>
									<tr>
										<td><?= $ticket->id_ticket; ?></td>
										<td><?= date("d/m/Y",strtotime($ticket->fecha)); ?></td>
										<td><?= $ticket->estado; ?></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Información variable -->
			<?= $this->load->view($contenido); ?>
			
		</div>
      	<footer>
      		<p><?= $this->session->userdata('nombre_usuario'); ?>&copy; Sistema de gestión de tickes UNSA - <?= date('d-m-Y H:i') ?> </p>
      	</footer>
		
	</div>
</body>
</html>
<script type="text/javascript">
	base_url = '<?=base_url(); ?>';
</script>
<script src="<?= base_url('js/alumnos.js'); ?>"></script>