<!-- Custom Js -->
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/pages/index.js')}}"></script>

<!-- Jquery Core Js -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('')}}plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="{{asset('')}}plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<script type="text/javascript">
	$('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>

<!-- Demo Js -->
<script src="{{asset('js/demo.js')}}"></script>
