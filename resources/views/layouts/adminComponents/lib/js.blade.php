
{{-- adminLTEv2 --}}
    <!-- jQuery 3 -->
<script src={{ URL::asset('adminPages/v2/bower_components/jquery/dist/jquery.min.js'); }}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{ URL::asset('adminPages/v2/bower_components/bootstrap/dist/js/bootstrap.min.js'); }}></script>
<!-- AdminLTE App -->
<script src={{ URL::asset('adminPages/v2/dist/js/adminlte.min.js'); }}></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->



{{-- For charts --}}

<!-- ChartJS -->
<script src={{ URL::asset('adminPages/v2/bower_components/chart.js/Chart.js'); }}></script>
<!-- FastClick -->
<script src={{ URL::asset('adminPages/v2/bower_components/fastclick/lib/fastclick.js'); }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ URL::asset('adminPages/v2/dist/js/demo.js'); }}></script>







{{-- Data table --}}

<!-- DataTables -->
<script src={{ URL::asset('adminPages/v2/bower_components/datatables.net/js/jquery.dataTables.min.js'); }}></script>
<script src={{ URL::asset('adminPages/v2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); }}></script>
<!-- SlimScroll -->
<script src={{ URL::asset('adminPages/v2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); }}></script>


{{-- date picker --}}

<!-- bootstrap datepicker -->
<script src={{ URL::asset('adminPages/v2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); }}></script>

<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>


<!-- page script -->
@stack('specificJs')

