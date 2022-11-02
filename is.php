<?php
include('./include/conexion.php');
include('./include/busquedas.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="./Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="./Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="./Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="./Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="./Gentella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="./Gentella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="./Gentella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="./Gentella/vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="./Gentella/build/css/custom.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<div class="nav-md">
	<style>
		input[type=number]::-webkit-outer-spin-button,

		input[type=number]::-webkit-inner-spin-button {

			-webkit-appearance: none;

			margin: 0;

		}



		input[type=number] {

			-moz-appearance: textfield;

		}
	</style>
	<div class="x_title">
		<h2>Form Design <small>different form elements</small></h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Settings 1</a>
					</li>
					<li><a href="#">Settings 2</a>
					</li>
				</ul>
			</li>
			<li><a class="close-link"><i class="fa fa-close"></i></a>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="main_container d-flex my-0">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_content">
						<br />
						<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
							<div class="form-group">
								<label class="col-sm-3 control-label">Ingresar DNI:</label>
								<div class="col-md-5 col-sm-6 col-xs-12">
									<div class="input-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" id="documento" class="form-control col-md-7 col-xs-12">
										<span class="input-group-btn">
											<button type="button" class="btn btn-info"><i class="fa fa-search" id="buscar"></i></button>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Apellido Paterno:
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="apellidoPaterno" disabled class="form-control col-md-7 col-xs-12">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido Materno:
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="apellidoMaterno" disabled class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nombres: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nombres" class="form-control col-md-7 col-xs-12" disabled name="middle-name">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sexo: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-select  form-select-lg">
										<option>Femenino</option>
										<option>Masculino</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de nacimiento: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="date" id="nombres" class="form-control col-md-7 col-xs-12" name="middle-name">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lugar de Nacimiento:</label>
								<div class="row g-3">
									<div class="col-md-2 col-sm-1 col-xs-2">
										<select class="form-select  form-select-lg">
											<option>Pais</option>
											<?php
											$buscar_pais = buscarPais($conexion);
											while ($res_b_pais = mysqli_fetch_array($buscar_pais)) {
											?>
												<option value="<?php echo $res_b_pais['idPais']; ?>"><?php echo $res_b_pais['pais']; ?></option>
											<?php
											};
											?>
										</select>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2">
										<select class="form-select  form-select-lg">
											<option>Departamento</option>
											<?php
											$buscar_pro = buscarProvincia($conexion);
											while ($res_b_pro = mysqli_fetch_array($buscar_pro)) {
											?>
												<option value="<?php echo $res_b_depa['idProvincia']; ?>"><?php echo $res_b_pro['provincia']; ?></option>
											<?php
											};
											?>
										</select>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2">
										<select class="form-select  form-select-lg">
											<option>Provincia</option>
											<?php
											$buscar_pro = buscarProvincia($conexion);
											while ($res_b_pro = mysqli_fetch_array($buscar_pro)) {
											?>
												<option value="<?php echo $res_b_depa['idProvincia']; ?>"><?php echo $res_b_pro['provincia']; ?></option>
											<?php
											};
											?>
										</select>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2">
										<select class="form-select  form-select-lg">
											<option>Distrito</option>
											<?php
											$buscar_dis = buscarDistrito($conexion);
											while ($res_b_dis = mysqli_fetch_array($buscar_dis)) {
											?>
												<option value="<?php echo $res_b_dis['idDistrito']; ?>"><?php echo $res_b_dis['distrito']; ?></option>
											<?php
											};
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion Actual: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nombres" class="form-control col-md-7 col-xs-12" name="middle-name">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Colegio de procedencia: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nombres" class="form-control col-md-7 col-xs-12" name="middle-name">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad a presentarse: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nombres" class="form-control col-md-7 col-xs-12" name="middle-name">
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono: </label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<input type="text" id="nombres" class="form-control col-md-2 col-xs-12" name="middle-name">
									</div>
									<label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Email: </label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<input type="text" id="nombres" class="form-control col-md-2 col-xs-12" name="middle-name">
									</div>
								</div>
								<div class="row">
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Modalidad: </label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<select class="form-select  form-select-lg">
											<option>Seleccionar</option>

										</select>
									</div>
									<label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Academia de Preparación: </label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<select class="form-select  form-select-lg">
											<option>Seleccionar</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Academia de Preparación: </label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nombres" class="form-control col-md-7 col-xs-12" name="middle-name">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mx-3">
			<div class="col-md-6col-sm-6 col-xs-6">
				<div class="x_panel">
					<div class="x_content">
						<br />
						<div class="form-group">
							<h4>Foto del postulante: 234</h4>
						</div>
						<div class="form-group">
							<iframe id="frame" src="card.html" style="width:560px; height:390px;" name="frame"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ln_solid"></div>
	<div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 d-flex justify-content-center my-2">
			<button class="btn btn-primary btn-lg text-lg py-3" type="button">Cancelar</button>
			<button class="btn btn-primary btn-lg" type="reset">Limpiar</button>
			<button type="submit" class="btn btn-success btn-lg" >Grabar e Imprimir Fotocheck</button>
		</div>
	</div>
	<!--MENU SUPERIOR -->
	<!-- page content -->
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
			</div>
		</div>
	</div>
	</div>
	<!-- jQuery -->
	<script>
		$('#buscar').click(function() {
			dni = $('#documento').val();
			$.ajax({
				url: './operaciones/logicainscripcion.php',
				type: 'post',
				data: 'dni=' + dni,
				dataType: 'json',
				success: function(r) {
					if (r.numeroDocumento === dni) {
						$('#apellidoPaterno').val(r.apellidoPaterno);
						$('#apellidoMaterno').val(r.apellidoMaterno);
						$('#nombres').val(r.nombres);
						$('#direccion').val(r.direccion);
					} else {
						alert('error, ingrese un numero de documento valido')
					}
				}

			});
		});
	</script>
	<script src="./Gentella/"></script>
	<script src="./Gentella/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="./Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="./Gentella/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="./Gentella/vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="./Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="./Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="./Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="./Gentella/vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="./Gentella/vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="./Gentella/vendors/Flot/jquery.flot.js"></script>
	<script src="./Gentella/vendors/Flot/jquery.flot.pie.js"></script>
	<script src="./Gentella/vendors/Flot/jquery.flot.time.js"></script>
	<script src="./Gentella/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="./Gentella/vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="./Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="./Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="./Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="./Gentella/vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="./Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="./Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="./Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="./Gentella/vendors/moment/min/moment.min.js"></script>
	<script src="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="./Gentella/build/js/custom.min.js"></script>
	<script src="./js/campos-especificos.js"></script>
	</body>

</html>
<script src="./Gentella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="./Gentella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="./Gentella/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="./Gentella/vendors/moment/min/moment.min.js"></script>
<script src="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="./Gentella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="./Gentella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap Colorpicker -->
<script src="./Gentella/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- jquery.inputmask -->
<script src="./Gentella/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- jQuery Knob -->
<script src="./Gentella/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Cropper -->
<script src="./Gentella/vendors/cropper/dist/cropper.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script>
	$('#myDatepicker').datetimepicker();

	$('#myDatepicker2').datetimepicker({
		format: 'DD.MM.YYYY'
	});

	$('#myDatepicker3').datetimepicker({
		format: 'hh:mm A'
	});

	$('#myDatepicker4').datetimepicker({
		ignoreReadonly: true,
		allowInputToggle: true
	});

	$('#datetimepicker6').datetimepicker();

	$('#datetimepicker7').datetimepicker({
		useCurrent: false
	});

	$("#datetimepicker6").on("dp.change", function(e) {
		$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
	});

	$("#datetimepicker7").on("dp.change", function(e) {
		$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
	});
</script>
</body>

</html>