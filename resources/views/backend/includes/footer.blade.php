 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.3
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
<script src="{{asset('backassets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backassets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backassets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backassets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backassets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backassets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backassets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backassets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backassets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backassets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backassets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backassets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backassets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backassets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backassets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backassets/dist/js/demo.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('backassets/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('backassets/dist/js/dropzone.js')}}"></script>

<!-- /.content-wrapper -->
{{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
<script>
    // Normal ckEditor example code
    // var elements = CKEDITOR.document.find( 'textarea' ),
    //     i = 0,
    //     element;
    // while (( element = elements.getItem( i++ ) )) {
    //     CKEDITOR.replace( element );
    // }
    // CKEDITOR.replace( 'link-desc' );
    // CKEDITOR.replace( 'noti-desc' );
    // CKEDITOR.replace( 'desc-des' );
    // CKEDITOR.replace( 'desc-application' );
   
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('assets/editor/editor.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#edescription").Editor();
            $("#eaddLink").Editor();
            $("#enotification").Editor();
        });
    </script>
    <link href="{{asset('assets/editor/editor.css')}}" type="text/css" rel="stylesheet"/>

    <script>
        $('.add-description').on('click', function(){
          $('#edescription').val($("#edescription").Editor("getText"))
        })

        $('.add-link').on('click', function(){
            $('#eaddLink').val($("#eaddLink").Editor("getText"))
        })
        $('.add-notifications').on('click', function(){
            $('#enotification').val($("#enotification").Editor("getText"))
        })
    </script>
        <!-- DataTables -->
<!-- DataTables -->
<script src="{{asset('backassets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backassets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  
</script>
{{-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script> --}}



</body>
</html>
