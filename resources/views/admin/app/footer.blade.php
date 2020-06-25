<footer class="main-footer">
    <div class="col-md-12 text-center">
    <strong>Copyright &copy; 2020</strong>
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('/adtemp/plugins/jquery/jquery.min.js' ) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('/adtemp/plugins/jquery-ui/jquery-ui.min.js' ) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('/adtemp/plugins/bootstrap/js/bootstrap.bundle.min.js' ) }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('/adtemp/plugins/chart.js' ) }}/Chart.min.js' ) }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('/adtemp/plugins/sparklines/sparkline.js' ) }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('/adtemp/plugins/jqvmap/jquery.vmap.min.js' ) }}"></script>
<script src="{{ URL::asset('/adtemp/plugins/jqvmap/maps/jquery.vmap.usa.js' ) }}"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "bSort" : false,
        } );
    } );
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('/adtemp/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ) }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('/adtemp/plugins/summernote/summernote-bs4.min.js' ) }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('/adtemp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ) }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('/adtemp/dist/js/adminlte.js' ) }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('/adtemp/dist/js/pages/dashboard.js' ) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('/adtemp/dist/js/demo.js' ) }}"></script>
</body>
</html>
