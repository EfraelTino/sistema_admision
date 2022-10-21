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
    <!-- bootstrap-daterangepicker -->
    <link href="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="./Gentella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="./Gentella/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="./Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="./Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="./Gentella/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="./Gentella/vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./Gentella/build/css/custom.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="nav-md">
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
    <div class="main_container">

        <!--MENU SUPERIOR -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                </div>
            </div>
        </div>
        <!-- /page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Registro de estudiantes -IESTPH</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h3>CONSULTA DE DNI</h3>
                <div class="btn-group">
                    <input type="text"  id="documento" class="form-control">
                    <button class="btn btn-info" id="buscar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </div>
                <div class="row">
                <div class="col-sm-4"> <input type="text" id="apellidoPaterno" class="form-control" disabled></div>
                </div>
                <br>
                <div class="row">  
                    <div class="col-sm-4"> <input type="text" id="apellidoMaterno" class="form-control" disabled></div>
                </div>
                <br>
                <div class="row">
                <div class="col-sm-4"> <input type="text" id="nombres" class="form-control" disabled></div>
                </div>
                <div class="row">
                <div class="col-sm-4"> <input type="text" id="direccion" class="form-control" disabled></div>
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
                        if (r.numeroDocumento  === dni) {
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